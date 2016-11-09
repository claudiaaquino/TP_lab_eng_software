<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PagamentoFormas Controller
 *
 * @property \App\Model\Table\PagamentoformasTable $Pagamentoformas
 */
class PagamentoformasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pagamentoFormas = $this->paginate($this->Pagamentoformas);

        $this->set(compact('pagamentoFormas'));
        $this->set('_serialize', ['pagamentoFormas']);
    }

    /**
     * View method
     *
     * @param string|null $id Pagamento Forma id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagamentoForma = $this->Pagamentoformas->get($id, [
            'contain' => ['Postopagamentoforma']
        ]);

        $this->set('pagamentoForma', $pagamentoForma);
        $this->set('_serialize', ['pagamentoForma']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagamentoForma = $this->Pagamentoformas->newEntity();
        if ($this->request->is('post')) {
            $pagamentoForma = $this->Pagamentoformas->patchEntity($pagamentoForma, $this->request->data);
            if ($this->Pagamentoformas->save($pagamentoForma)) {
                $this->Flash->success(__('O registro de pagamento forma foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de pagamento forma não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('pagamentoForma'));
        $this->set('_serialize', ['pagamentoForma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pagamento Forma id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagamentoForma = $this->Pagamentoformas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagamentoForma = $this->Pagamentoformas->patchEntity($pagamentoForma, $this->request->data);
            if ($this->Pagamentoformas->save($pagamentoForma)) {
                $this->Flash->success(__('O registro de pagamento forma foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de pagamento forma não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('pagamentoForma'));
        $this->set('_serialize', ['pagamentoForma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagamento Forma id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagamentoForma = $this->Pagamentoformas->get($id);
        if ($this->Pagamentoformas->delete($pagamentoForma)) {
            $this->Flash->success(__('O registro de pagamento forma foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de pagamento forma não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
