<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VeiculoFuels Controller
 *
 * @property \App\Model\Table\VeiculoFuelsTable $VeiculoFuels
 */
class VeiculoFuelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Veiculos', 'Fuels']
        ];
        $veiculoFuels = $this->paginate($this->VeiculoFuels);

        $this->set(compact('veiculoFuels'));
        $this->set('_serialize', ['veiculoFuels']);
    }

    /**
     * View method
     *
     * @param string|null $id Veiculo Fuel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $veiculoFuel = $this->VeiculoFuels->get($id, [
            'contain' => ['Veiculos', 'Fuels']
        ]);

        $this->set('veiculoFuel', $veiculoFuel);
        $this->set('_serialize', ['veiculoFuel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $veiculoFuel = $this->VeiculoFuels->newEntity();
        if ($this->request->is('post')) {
            $veiculoFuel = $this->VeiculoFuels->patchEntity($veiculoFuel, $this->request->data);
            if ($this->VeiculoFuels->save($veiculoFuel)) {
                $this->Flash->success(__('The veiculo fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The veiculo fuel could not be saved. Please, try again.'));
            }
        }
        $veiculos = $this->VeiculoFuels->Veiculos->find('list', ['limit' => 200]);
        $fuels = $this->VeiculoFuels->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('veiculoFuel', 'veiculos', 'fuels'));
        $this->set('_serialize', ['veiculoFuel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Veiculo Fuel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $veiculoFuel = $this->VeiculoFuels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $veiculoFuel = $this->VeiculoFuels->patchEntity($veiculoFuel, $this->request->data);
            if ($this->VeiculoFuels->save($veiculoFuel)) {
                $this->Flash->success(__('The veiculo fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The veiculo fuel could not be saved. Please, try again.'));
            }
        }
        $veiculos = $this->VeiculoFuels->Veiculos->find('list', ['limit' => 200]);
        $fuels = $this->VeiculoFuels->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('veiculoFuel', 'veiculos', 'fuels'));
        $this->set('_serialize', ['veiculoFuel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Veiculo Fuel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $veiculoFuel = $this->VeiculoFuels->get($id);
        if ($this->VeiculoFuels->delete($veiculoFuel)) {
            $this->Flash->success(__('The veiculo fuel has been deleted.'));
        } else {
            $this->Flash->error(__('The veiculo fuel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
