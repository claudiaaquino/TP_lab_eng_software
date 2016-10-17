<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HistoricoPrecos Controller
 *
 * @property \App\Model\Table\HistoricoPrecosTable $HistoricoPrecos
 */
class HistoricoPrecosController extends AppController
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
        $historicoPrecos = $this->paginate($this->HistoricoPrecos);

        $this->set(compact('historicoPrecos'));
        $this->set('_serialize', ['historicoPrecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Historico Preco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historicoPreco = $this->HistoricoPrecos->get($id, [
            'contain' => ['Postos', 'Fuels', 'HistoricoAbastecimentos']
        ]);

        $this->set('historicoPreco', $historicoPreco);
        $this->set('_serialize', ['historicoPreco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historicoPreco = $this->HistoricoPrecos->newEntity();
        if ($this->request->is('post')) {
            $historicoPreco = $this->HistoricoPrecos->patchEntity($historicoPreco, $this->request->data);
            if ($this->HistoricoPrecos->save($historicoPreco)) {
                $this->Flash->success(__('The historico preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historico preco could not be saved. Please, try again.'));
            }
        }
        $postos = $this->HistoricoPrecos->Postos->find('list', ['limit' => 200]);
        $fuels = $this->HistoricoPrecos->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('historicoPreco', 'postos', 'fuels'));
        $this->set('_serialize', ['historicoPreco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Historico Preco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historicoPreco = $this->HistoricoPrecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historicoPreco = $this->HistoricoPrecos->patchEntity($historicoPreco, $this->request->data);
            if ($this->HistoricoPrecos->save($historicoPreco)) {
                $this->Flash->success(__('The historico preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historico preco could not be saved. Please, try again.'));
            }
        }
        $postos = $this->HistoricoPrecos->Postos->find('list', ['limit' => 200]);
        $fuels = $this->HistoricoPrecos->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('historicoPreco', 'postos', 'fuels'));
        $this->set('_serialize', ['historicoPreco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Historico Preco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historicoPreco = $this->HistoricoPrecos->get($id);
        if ($this->HistoricoPrecos->delete($historicoPreco)) {
            $this->Flash->success(__('The historico preco has been deleted.'));
        } else {
            $this->Flash->error(__('The historico preco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
