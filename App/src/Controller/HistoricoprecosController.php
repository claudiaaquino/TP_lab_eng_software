<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Historicoprecos Controller
 *
 * @property \App\Model\Table\HistoricoprecosTable $Historicoprecos
 */
class HistoricoprecosController extends AppController
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
        $historicoPrecos = $this->paginate($this->Historicoprecos);

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
        $historicoPreco = $this->Historicoprecos->get($id, [
            'contain' => ['Postos', 'Fuels', 'Historicoabastecimentos.Veiculos']
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
        $historicoPreco = $this->Historicoprecos->newEntity();
        if ($this->request->is('post')) {
            $historicoPreco = $this->Historicoprecos->patchEntity($historicoPreco, $this->request->data);
            if ($this->Historicoprecos->save($historicoPreco)) {
                $this->Flash->success(__('O registro de historico preco foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de historico preco não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $postos = $this->Historicoprecos->Postos->find('list', ['limit' => 200]);
        $fuels = $this->Historicoprecos->Fuels->find('list', ['limit' => 200]);
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
        $historicoPreco = $this->Historicoprecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historicoPreco = $this->HistoricoPrecos->patchEntity($historicoPreco, $this->request->data);
            if ($this->HistoricoPrecos->save($historicoPreco)) {
                $this->Flash->success(__('O registro de historico preco foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de historico preco não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $postos = $this->Historicoprecos->Postos->find('list', ['limit' => 200]);
        $fuels = $this->Historicoprecos->Fuels->find('list', ['limit' => 200]);
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
        $historicoPreco = $this->Historicoprecos->get($id);
        if ($this->Historicoprecos->delete($historicoPreco)) {
            $this->Flash->success(__('O registro de historico preco foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de historico preco não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
