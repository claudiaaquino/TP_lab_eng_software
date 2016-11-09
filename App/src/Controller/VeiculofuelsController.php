<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Veiculofuels Controller
 *
 * @property \App\Model\Table\VeiculofuelsTable $Veiculofuels
 */
class VeiculofuelsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($veiculo_id = null) {
        $this->paginate = [
            'contain' => ['Veiculos', 'Fuels']
        ];
        $veiculoFuels = $this->paginate($this->Veiculofuels/*->find()->where(['veiculo_id' => $veiculo_id])*/);

       /* $this->set(compact('veiculo_id'));*/
        $this->set(compact('veiculoFuels'));
        $this->set('_serialize', ['veiculoFuels']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($veiculo_id = null) {
        $veiculoFuel = $this->Veiculofuels->newEntity();
        if ($this->request->is('post')) {
            $veiculoFuel = $this->Veiculofuels->patchEntity($veiculoFuel, $this->request->data);
            if ($this->Veiculofuels->save($veiculoFuel)) {
                $this->Flash->success(__('O registro de veiculo fuel foi salvo.'));

                return $this->redirect(['action' => 'index'/*, $veiculoFuel->veiculo_id*/]);
            } else {
                $this->Flash->error(__('O registro de veiculo fuel não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $veiculos = $this->Veiculofuels->Veiculos->find('list', ['limit' => 200]);
        $fuels = $this->Veiculofuels->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('veiculoFuel', 'veiculos', 'fuels'/*, 'veiculo_id'*/));
        $this->set('_serialize', ['veiculoFuel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Veiculo Fuel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $veiculoFuel = $this->Veiculofuels->get($id);

        if ($this->Veiculofuels->delete($veiculoFuel)) {
            $this->Flash->success(__('O registro de veiculo fuel foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de veiculo fuel não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index'/*, $veiculoFuel->veiculo_id*/]);
    }

}
