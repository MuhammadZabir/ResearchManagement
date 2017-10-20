<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MockVivaLogs Controller
 *
 * @property \App\Model\Table\MockVivaLogsTable $MockVivaLogs
 *
 * @method \App\Model\Entity\MockVivaLog[] paginate($object = null, array $settings = [])
 */
class MockVivaLogsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Theses']
        ];
        $mockVivaLogs = $this->paginate($this->MockVivaLogs);

        $this->set(compact('mockVivaLogs'));
        $this->set('_serialize', ['mockVivaLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Mock Viva Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mockVivaLog = $this->MockVivaLogs->get($id, [
            'contain' => ['Theses', 'Examiners']
        ]);

        $this->set('mockVivaLog', $mockVivaLog);
        $this->set('_serialize', ['mockVivaLog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mockVivaLog = $this->MockVivaLogs->newEntity();
        if ($this->request->is('post')) {
            $mockVivaLog = $this->MockVivaLogs->patchEntity($mockVivaLog, $this->request->getData());
            if ($this->MockVivaLogs->save($mockVivaLog)) {
                $this->Flash->success(__('The mock viva log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mock viva log could not be saved. Please, try again.'));
        }
        $theses = $this->MockVivaLogs->Theses->find('list', ['limit' => 200]);
        $this->set(compact('mockVivaLog', 'theses'));
        $this->set('_serialize', ['mockVivaLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mock Viva Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mockVivaLog = $this->MockVivaLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mockVivaLog = $this->MockVivaLogs->patchEntity($mockVivaLog, $this->request->getData());
            if ($this->MockVivaLogs->save($mockVivaLog)) {
                $this->Flash->success(__('The mock viva log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mock viva log could not be saved. Please, try again.'));
        }
        $theses = $this->MockVivaLogs->Theses->find('list', ['limit' => 200]);
        $this->set(compact('mockVivaLog', 'theses'));
        $this->set('_serialize', ['mockVivaLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mock Viva Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mockVivaLog = $this->MockVivaLogs->get($id);
        if ($this->MockVivaLogs->delete($mockVivaLog)) {
            $this->Flash->success(__('The mock viva log has been deleted.'));
        } else {
            $this->Flash->error(__('The mock viva log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
