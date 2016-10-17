<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PostoPagamentoFormas Controller
 *
 * @property \App\Model\Table\PostoPagamentoFormasTable $PostoPagamentoFormas
 */
class PostoPagamentoFormasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Postos', 'PagamentoFormas']
        ];
        $postoPagamentoFormas = $this->paginate($this->PostoPagamentoFormas);

        $this->set(compact('postoPagamentoFormas'));
        $this->set('_serialize', ['postoPagamentoFormas']);
    }

    /**
     * View method
     *
     * @param string|null $id Posto Pagamento Forma id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postoPagamentoForma = $this->PostoPagamentoFormas->get($id, [
            'contain' => ['Postos', 'PagamentoFormas']
        ]);

        $this->set('postoPagamentoForma', $postoPagamentoForma);
        $this->set('_serialize', ['postoPagamentoForma']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postoPagamentoForma = $this->PostoPagamentoFormas->newEntity();
        if ($this->request->is('post')) {
            $postoPagamentoForma = $this->PostoPagamentoFormas->patchEntity($postoPagamentoForma, $this->request->data);
            if ($this->PostoPagamentoFormas->save($postoPagamentoForma)) {
                $this->Flash->success(__('The posto pagamento forma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The posto pagamento forma could not be saved. Please, try again.'));
            }
        }
        $postos = $this->PostoPagamentoFormas->Postos->find('list', ['limit' => 200]);
        $pagamentoFormas = $this->PostoPagamentoFormas->PagamentoFormas->find('list', ['limit' => 200]);
        $this->set(compact('postoPagamentoForma', 'postos', 'pagamentoFormas'));
        $this->set('_serialize', ['postoPagamentoForma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Posto Pagamento Forma id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postoPagamentoForma = $this->PostoPagamentoFormas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postoPagamentoForma = $this->PostoPagamentoFormas->patchEntity($postoPagamentoForma, $this->request->data);
            if ($this->PostoPagamentoFormas->save($postoPagamentoForma)) {
                $this->Flash->success(__('The posto pagamento forma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The posto pagamento forma could not be saved. Please, try again.'));
            }
        }
        $postos = $this->PostoPagamentoFormas->Postos->find('list', ['limit' => 200]);
        $pagamentoFormas = $this->PostoPagamentoFormas->PagamentoFormas->find('list', ['limit' => 200]);
        $this->set(compact('postoPagamentoForma', 'postos', 'pagamentoFormas'));
        $this->set('_serialize', ['postoPagamentoForma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Posto Pagamento Forma id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postoPagamentoForma = $this->PostoPagamentoFormas->get($id);
        if ($this->PostoPagamentoFormas->delete($postoPagamentoForma)) {
            $this->Flash->success(__('The posto pagamento forma has been deleted.'));
        } else {
            $this->Flash->error(__('The posto pagamento forma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
