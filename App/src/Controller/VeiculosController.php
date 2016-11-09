<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Veiculos Controller
 *
 * @property \App\Model\Table\VeiculosTable $Veiculos
 */
class VeiculosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users', 'Modelos']
        ];
//        $query = $this->Articles->find()->where(['user_id' => $this->Auth->user('id')]);
//    $this->set('articles', $this->paginate($query));
        $veiculos = $this->paginate($this->Veiculos->find()->where(['user_id' => $this->Auth->user('id')]));
        $this->set(compact('veiculos'));
        $this->set('_serialize', ['veiculos']);
    }

    /**
     * View method
     *
     * @param string|null $id Veiculo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $veiculo = $this->Veiculos->get($id, [
            'contain' => [ 'Modelos', 'Historicoabastecimentos', 'Veiculofuels']
        ]);

        $combustiveis = $this->Veiculos->find()
                ->innerJoinWith('Veiculofuels.Fuels')->select('Fuels.descricao')
                ->where(['Veiculos.id' => $id])
                ->all();

        $this->set('veiculo', $veiculo);
        $this->set('combustiveis', $combustiveis);
        $this->set('_serialize', ['veiculo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $veiculo = $this->Veiculos->newEntity();
        if ($this->request->is('post')) {
            $veiculo = $this->Veiculos->patchEntity($veiculo, $this->request->data);
            $veiculo->user_id = $this->Auth->user('id');
            if ($this->Veiculos->save($veiculo)) {
                $this->Flash->success(__('O registro de veiculo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de veiculo não pôde ser salvo. Por favor, tente novamente.'));
            }
        }

        $modelos = $this->Veiculos->Modelos->find('list');
        $this->set(compact('veiculo', 'modelos'));
        $this->set('_serialize', ['veiculo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Veiculo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $veiculo = $this->Veiculos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $veiculo = $this->Veiculos->patchEntity($veiculo, $this->request->data);
            if ($this->Veiculos->save($veiculo)) {
                $this->Flash->success(__('O registro de veiculo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de veiculo não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $users = $this->Veiculos->Users->find('list', ['limit' => 200]);
        $modelos = $this->Veiculos->Modelos->find('list', ['limit' => 200]);
        $this->set(compact('veiculo', 'users', 'modelos'));
        $this->set('_serialize', ['veiculo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Veiculo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $veiculo = $this->Veiculos->get($id);
        if ($this->Veiculos->delete($veiculo)) {
            $this->Flash->success(__('O registro de veiculo foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de veiculo não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
