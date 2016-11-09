<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Historicoabastecimentos Controller
 *
 * @property \App\Model\Table\HistoricoabastecimentosTable $Historicoabastecimentos
 */
class HistoricoabastecimentosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Veiculos', 'Historicoprecos.Postos'/* , 'Postos' */]
        ];
        $historicoAbastecimentos = $this->paginate($this->Historicoabastecimentos/* ->find()->innerJoinWith("HistoricoPrecos.Postos") */);

        $this->set(compact('historicoAbastecimentos'));
        $this->set('_serialize', ['historicoAbastecimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Historico Abastecimento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $historicoAbastecimento = $this->Historicoabastecimentos->get($id, [
            'contain' => ['Veiculos', 'Historicoprecos.Postos', 'Historicoprecos.Fuels',]
        ]);

        $this->set('historicoAbastecimento', $historicoAbastecimento);
        $this->set('_serialize', ['historicoAbastecimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $historicoAbastecimento = $this->Historicoabastecimentos->newEntity();
        if ($this->request->is('post')) {
            $historicoAbastecimento = $this->Historicoabastecimentos->patchEntity($historicoAbastecimento, $this->request->data);

            $historicoPrecos = $this->Historicoabastecimentos->Historicoprecos->find()->applyOptions(['order' => ['dt_cadastro' => 'DESC']])
                            ->where(['posto_id' => $this->request->data('posto_id'), 'fuel_id' => $this->request->data('fuel_id')])->all();

            $histpreco = $historicoPrecos->toArray();
            $historicoAbastecimento->historicopreco_id = $histpreco[0]->id;
            $historicoAbastecimento->valor_total = ($histpreco[0]->preco_litro) * $historicoAbastecimento->litros;

            if ($this->Historicoabastecimentos->save($historicoAbastecimento)) {
                $this->Flash->success(__('O registro de historico abastecimento foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de historico abastecimento não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $veiculos = $this->Historicoabastecimentos->Veiculos->find('list', ['limit' => 200]);
        $postos = $this->Historicoabastecimentos->Historicoprecos->Postos->find('list', ['limit' => 200]);
        $fuels = $this->Historicoabastecimentos->Historicoprecos->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('historicoAbastecimento', 'veiculos', 'postos', 'fuels'/* ,'historicoPrecos' */));
        $this->set('_serialize', ['historicoAbastecimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Historico Abastecimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $historicoAbastecimento = $this->Historicoabastecimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historicoAbastecimento = $this->Historicoabastecimentos->patchEntity($historicoAbastecimento, $this->request->data);
            if ($this->Historicoabastecimentos->save($historicoAbastecimento)) {
                $this->Flash->success(__('O registro de historico abastecimento foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de historico abastecimento não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $veiculos = $this->Historicoabastecimentos->Veiculos->find('list', ['limit' => 200]);
        $historicoPrecos = $this->Historicoabastecimentos->Historicoprecos->find('list', ['limit' => 200]);
        $this->set(compact('historicoAbastecimento', 'veiculos', 'historicoPrecos'));
        $this->set('_serialize', ['historicoAbastecimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Historico Abastecimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $historicoAbastecimento = $this->Historicoabastecimentos->get($id);
        if ($this->Historicoabastecimentos->delete($historicoAbastecimento)) {
            $this->Flash->success(__('O registro de historico abastecimento foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de historico abastecimento não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
