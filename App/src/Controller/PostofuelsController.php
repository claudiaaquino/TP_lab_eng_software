<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Postofuels Controller
 *
 * @property \App\Model\Table\PostofuelsTable $Postofuels
 */
class PostofuelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Postos', 'Fuels']
        ];
        $postoFuels = $this->paginate($this->Postofuels);

        $this->set(compact('postoFuels'));
        $this->set('_serialize', ['postoFuels']);
    }

    /**
     * View method
     *
     * @param string|null $id Posto Fuel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postoFuel = $this->Postofuels->get($id, [
            'contain' => ['Postos', 'Fuels']
        ]);

        $this->set('postoFuel', $postoFuel);
        $this->set('_serialize', ['postoFuel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postoFuel = $this->Postofuels->newEntity();
        if ($this->request->is('post')) {
            $postoFuel = $this->Postofuels->patchEntity($postoFuel, $this->request->data);
            if ($this->Postofuels->save($postoFuel)) {
                $this->Flash->success(__('O registro de posto fuel foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de posto fuel não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $postos = $this->Postofuels->Postos->find('list', ['limit' => 200]);
        $fuels = $this->Postofuels->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('postoFuel', 'postos', 'fuels'));
        $this->set('_serialize', ['postoFuel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Posto Fuel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postoFuel = $this->Postofuels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postoFuel = $this->Postofuels->patchEntity($postoFuel, $this->request->data);
            if ($this->Postofuels->save($postoFuel)) {
                $this->Flash->success(__('O registro de posto fuel foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de posto fuel não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $postos = $this->Postofuels->Postos->find('list', ['limit' => 200]);
        $fuels = $this->Postofuels->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('postoFuel', 'postos', 'fuels'));
        $this->set('_serialize', ['postoFuel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Posto Fuel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postoFuel = $this->Postofuels->get($id);
        if ($this->Postofuels->delete($postoFuel)) {
            $this->Flash->success(__('O registro de posto fuel foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de posto fuel não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
