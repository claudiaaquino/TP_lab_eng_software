<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PagamentoFormas Controller
 *
 * @property \App\Model\Table\PagamentoFormasTable $PagamentoFormas
 */
class PagamentoFormasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pagamentoFormas = $this->paginate($this->PagamentoFormas);

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
        $pagamentoForma = $this->PagamentoFormas->get($id, [
            'contain' => ['PostoPagamentoForma']
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
        $pagamentoForma = $this->PagamentoFormas->newEntity();
        if ($this->request->is('post')) {
            $pagamentoForma = $this->PagamentoFormas->patchEntity($pagamentoForma, $this->request->data);
            if ($this->PagamentoFormas->save($pagamentoForma)) {
                $this->Flash->success(__('The pagamento forma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pagamento forma could not be saved. Please, try again.'));
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
        $pagamentoForma = $this->PagamentoFormas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagamentoForma = $this->PagamentoFormas->patchEntity($pagamentoForma, $this->request->data);
            if ($this->PagamentoFormas->save($pagamentoForma)) {
                $this->Flash->success(__('The pagamento forma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pagamento forma could not be saved. Please, try again.'));
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
        $pagamentoForma = $this->PagamentoFormas->get($id);
        if ($this->PagamentoFormas->delete($pagamentoForma)) {
            $this->Flash->success(__('The pagamento forma has been deleted.'));
        } else {
            $this->Flash->error(__('The pagamento forma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
