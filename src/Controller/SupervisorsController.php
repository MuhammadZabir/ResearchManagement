<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Supervisors Controller
 *
 * @property \App\Model\Table\SupervisorsTable $Supervisors
 *
 * @method \App\Model\Entity\Supervisor[] paginate($object = null, array $settings = [])
 */
class SupervisorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lecturers', 'Theses']
        ];
        $supervisors = $this->paginate($this->Supervisors);

        $this->set(compact('supervisors'));
        $this->set('_serialize', ['supervisors']);
    }

    /**
     * View method
     *
     * @param string|null $id Supervisor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supervisor = $this->Supervisors->get($id, [
            'contain' => ['Lecturers', 'Theses']
        ]);

        $this->set('supervisor', $supervisor);
        $this->set('_serialize', ['supervisor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supervisor = $this->Supervisors->newEntity();
        if ($this->request->is('post')) {
            $supervisor = $this->Supervisors->patchEntity($supervisor, $this->request->getData());
            if ($this->Supervisors->save($supervisor)) {
                $this->Flash->success(__('The supervisor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supervisor could not be saved. Please, try again.'));
        }
        $lecturers = $this->Supervisors->Lecturers->find('list', ['limit' => 200]);
        $theses = $this->Supervisors->Theses->find('list', ['limit' => 200]);
        $this->set(compact('supervisor', 'lecturers', 'theses'));
        $this->set('_serialize', ['supervisor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Supervisor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supervisor = $this->Supervisors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supervisor = $this->Supervisors->patchEntity($supervisor, $this->request->getData());
            if ($this->Supervisors->save($supervisor)) {
                $this->Flash->success(__('The supervisor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supervisor could not be saved. Please, try again.'));
        }
        $lecturers = $this->Supervisors->Lecturers->find('list', ['limit' => 200]);
        $theses = $this->Supervisors->Theses->find('list', ['limit' => 200]);
        $this->set(compact('supervisor', 'lecturers', 'theses'));
        $this->set('_serialize', ['supervisor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Supervisor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supervisor = $this->Supervisors->get($id);
        if ($this->Supervisors->delete($supervisor)) {
            $this->Flash->success(__('The supervisor has been deleted.'));
        } else {
            $this->Flash->error(__('The supervisor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
