<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DrpLogs Controller
 *
 * @property \App\Model\Table\DrpLogsTable $DrpLogs
 *
 * @method \App\Model\Entity\DrpLog[] paginate($object = null, array $settings = [])
 */
class DrpLogsController extends AppController
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
        $drpLogs = $this->paginate($this->DrpLogs);

        $this->set(compact('drpLogs'));
        $this->set('_serialize', ['drpLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Drp Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drpLog = $this->DrpLogs->get($id, [
            'contain' => ['Theses', 'Examiners']
        ]);

        $this->set('drpLog', $drpLog);
        $this->set('_serialize', ['drpLog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $drpLog = $this->DrpLogs->newEntity();
        if ($this->request->is('post')) {
            $drpLog = $this->DrpLogs->patchEntity($drpLog, $this->request->getData());
            if ($this->DrpLogs->save($drpLog)) {
                $this->Flash->success(__('The drp log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drp log could not be saved. Please, try again.'));
        }
        $theses = $this->DrpLogs->Theses->find('list', ['limit' => 200]);
        $this->set(compact('drpLog', 'theses'));
        $this->set('_serialize', ['drpLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Drp Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $drpLog = $this->DrpLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drpLog = $this->DrpLogs->patchEntity($drpLog, $this->request->getData());
            if ($this->DrpLogs->save($drpLog)) {
                $this->Flash->success(__('The drp log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drp log could not be saved. Please, try again.'));
        }
        $theses = $this->DrpLogs->Theses->find('list', ['limit' => 200]);
        $this->set(compact('drpLog', 'theses'));
        $this->set('_serialize', ['drpLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Drp Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drpLog = $this->DrpLogs->get($id);
        if ($this->DrpLogs->delete($drpLog)) {
            $this->Flash->success(__('The drp log has been deleted.'));
        } else {
            $this->Flash->error(__('The drp log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
