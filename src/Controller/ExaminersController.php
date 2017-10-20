<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Examiners Controller
 *
 * @property \App\Model\Table\ExaminersTable $Examiners
 *
 * @method \App\Model\Entity\Examiner[] paginate($object = null, array $settings = [])
 */
class ExaminersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lecturers', 'DrpLogs', 'MockVivaLogs', 'VivaLogs']
        ];
        $examiners = $this->paginate($this->Examiners);

        $this->set(compact('examiners'));
        $this->set('_serialize', ['examiners']);
    }

    /**
     * View method
     *
     * @param string|null $id Examiner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $examiner = $this->Examiners->get($id, [
            'contain' => ['Lecturers', 'DrpLogs', 'MockVivaLogs', 'VivaLogs']
        ]);

        $this->set('examiner', $examiner);
        $this->set('_serialize', ['examiner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $examiner = $this->Examiners->newEntity();
        if ($this->request->is('post')) {
            $examiner = $this->Examiners->patchEntity($examiner, $this->request->getData());
            if ($this->Examiners->save($examiner)) {
                $this->Flash->success(__('The examiner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examiner could not be saved. Please, try again.'));
        }
        $lecturers = $this->Examiners->Lecturers->find('list', ['limit' => 200]);
        $drpLogs = $this->Examiners->DrpLogs->find('list', ['limit' => 200]);
        $mockVivaLogs = $this->Examiners->MockVivaLogs->find('list', ['limit' => 200]);
        $vivaLogs = $this->Examiners->VivaLogs->find('list', ['limit' => 200]);
        $this->set(compact('examiner', 'lecturers', 'drpLogs', 'mockVivaLogs', 'vivaLogs'));
        $this->set('_serialize', ['examiner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Examiner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $examiner = $this->Examiners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $examiner = $this->Examiners->patchEntity($examiner, $this->request->getData());
            if ($this->Examiners->save($examiner)) {
                $this->Flash->success(__('The examiner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examiner could not be saved. Please, try again.'));
        }
        $lecturers = $this->Examiners->Lecturers->find('list', ['limit' => 200]);
        $drpLogs = $this->Examiners->DrpLogs->find('list', ['limit' => 200]);
        $mockVivaLogs = $this->Examiners->MockVivaLogs->find('list', ['limit' => 200]);
        $vivaLogs = $this->Examiners->VivaLogs->find('list', ['limit' => 200]);
        $this->set(compact('examiner', 'lecturers', 'drpLogs', 'mockVivaLogs', 'vivaLogs'));
        $this->set('_serialize', ['examiner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Examiner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $examiner = $this->Examiners->get($id);
        if ($this->Examiners->delete($examiner)) {
            $this->Flash->success(__('The examiner has been deleted.'));
        } else {
            $this->Flash->error(__('The examiner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
