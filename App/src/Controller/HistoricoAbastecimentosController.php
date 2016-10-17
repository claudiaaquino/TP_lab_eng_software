<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HistoricoAbastecimentos Controller
 *
 * @property \App\Model\Table\HistoricoAbastecimentosTable $HistoricoAbastecimentos
 */
class HistoricoAbastecimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Veiculos', 'HistoricoPrecos']
        ];
        $historicoAbastecimentos = $this->paginate($this->HistoricoAbastecimentos);

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
    public function view($id = null)
    {
        $historicoAbastecimento = $this->HistoricoAbastecimentos->get($id, [
            'contain' => ['Veiculos', 'HistoricoPrecos']
        ]);

        $this->set('historicoAbastecimento', $historicoAbastecimento);
        $this->set('_serialize', ['historicoAbastecimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historicoAbastecimento = $this->HistoricoAbastecimentos->newEntity();
        if ($this->request->is('post')) {
            $historicoAbastecimento = $this->HistoricoAbastecimentos->patchEntity($historicoAbastecimento, $this->request->data);
//            $historicoAbastecimento->HistoricoPrecos
            if ($this->HistoricoAbastecimentos->save($historicoAbastecimento)) {
                $this->Flash->success(__('The historico abastecimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historico abastecimento could not be saved. Please, try again.'));
            }
        }
        $veiculos = $this->HistoricoAbastecimentos->Veiculos->find('list', ['limit' => 200]);
        $historicoPrecos = $this->HistoricoAbastecimentos->HistoricoPrecos->find('list', ['limit' => 200]);
        $this->set(compact('historicoAbastecimento', 'veiculos', 'historicoPrecos'));
        $this->set('_serialize', ['historicoAbastecimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Historico Abastecimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historicoAbastecimento = $this->HistoricoAbastecimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historicoAbastecimento = $this->HistoricoAbastecimentos->patchEntity($historicoAbastecimento, $this->request->data);
            if ($this->HistoricoAbastecimentos->save($historicoAbastecimento)) {
                $this->Flash->success(__('The historico abastecimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historico abastecimento could not be saved. Please, try again.'));
            }
        }
        $veiculos = $this->HistoricoAbastecimentos->Veiculos->find('list', ['limit' => 200]);
        $historicoPrecos = $this->HistoricoAbastecimentos->HistoricoPrecos->find('list', ['limit' => 200]);
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
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historicoAbastecimento = $this->HistoricoAbastecimentos->get($id);
        if ($this->HistoricoAbastecimentos->delete($historicoAbastecimento)) {
            $this->Flash->success(__('The historico abastecimento has been deleted.'));
        } else {
            $this->Flash->error(__('The historico abastecimento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
