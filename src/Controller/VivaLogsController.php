<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VivaLogs Controller
 *
 * @property \App\Model\Table\VivaLogsTable $VivaLogs
 *
 * @method \App\Model\Entity\VivaLog[] paginate($object = null, array $settings = [])
 */
class VivaLogsController extends AppController
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
        $vivaLogs = $this->paginate($this->VivaLogs);

        $this->set(compact('vivaLogs'));
        $this->set('_serialize', ['vivaLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Viva Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vivaLog = $this->VivaLogs->get($id, [
            'contain' => ['Theses', 'Examiners']
        ]);

        $this->set('vivaLog', $vivaLog);
        $this->set('_serialize', ['vivaLog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vivaLog = $this->VivaLogs->newEntity();
        if ($this->request->is('post')) {
            $vivaLog = $this->VivaLogs->patchEntity($vivaLog, $this->request->getData());
            if ($this->VivaLogs->save($vivaLog)) {
                $this->Flash->success(__('The viva log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The viva log could not be saved. Please, try again.'));
        }
        $theses = $this->VivaLogs->Theses->find('list', ['limit' => 200]);
        $this->set(compact('vivaLog', 'theses'));
        $this->set('_serialize', ['vivaLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Viva Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vivaLog = $this->VivaLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vivaLog = $this->VivaLogs->patchEntity($vivaLog, $this->request->getData());
            if ($this->VivaLogs->save($vivaLog)) {
                $this->Flash->success(__('The viva log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The viva log could not be saved. Please, try again.'));
        }
        $theses = $this->VivaLogs->Theses->find('list', ['limit' => 200]);
        $this->set(compact('vivaLog', 'theses'));
        $this->set('_serialize', ['vivaLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Viva Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vivaLog = $this->VivaLogs->get($id);
        if ($this->VivaLogs->delete($vivaLog)) {
            $this->Flash->success(__('The viva log has been deleted.'));
        } else {
            $this->Flash->error(__('The viva log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
