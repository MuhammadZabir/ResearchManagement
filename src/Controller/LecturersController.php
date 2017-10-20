<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lecturers Controller
 *
 * @property \App\Model\Table\LecturersTable $Lecturers
 *
 * @method \App\Model\Entity\Lecturer[] paginate($object = null, array $settings = [])
 */
class LecturersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $lecturers = $this->paginate($this->Lecturers);

        $this->set(compact('lecturers'));
        $this->set('_serialize', ['lecturers']);
    }

    /**
     * View method
     *
     * @param string|null $id Lecturer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lecturer = $this->Lecturers->get($id, [
            'contain' => ['Users', 'Lecturers', 'Attachments', 'Examiners', 'Supervisors']
        ]);

        $this->set('lecturer', $lecturer);
        $this->set('_serialize', ['lecturer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lecturer = $this->Lecturers->newEntity();
        if ($this->request->is('post')) {
            $lecturer = $this->Lecturers->patchEntity($lecturer, $this->request->getData());
            if ($this->Lecturers->save($lecturer)) {
                $this->Flash->success(__('The lecturer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lecturer could not be saved. Please, try again.'));
        }
        $users = $this->Lecturers->Users->find('list', ['limit' => 200]);
        $this->set(compact('lecturer', 'users'));
        $this->set('_serialize', ['lecturer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lecturer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lecturer = $this->Lecturers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lecturer = $this->Lecturers->patchEntity($lecturer, $this->request->getData());
            if ($this->Lecturers->save($lecturer)) {
                $this->Flash->success(__('The lecturer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lecturer could not be saved. Please, try again.'));
        }
        $users = $this->Lecturers->Users->find('list', ['limit' => 200]);
        $this->set(compact('lecturer', 'users'));
        $this->set('_serialize', ['lecturer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lecturer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lecturer = $this->Lecturers->get($id);
        if ($this->Lecturers->delete($lecturer)) {
            $this->Flash->success(__('The lecturer has been deleted.'));
        } else {
            $this->Flash->error(__('The lecturer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
