<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Postopagamentoformas Controller
 *
 * @property \App\Model\Table\PostopagamentoformasTable $Postopagamentoformas
 */
class PostopagamentoformasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Postos', 'Pagamentoformas']
        ];
        $postoPagamentoFormas = $this->paginate($this->Postopagamentoformas);

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
        $postoPagamentoForma = $this->Postopagamentoformas->get($id, [
            'contain' => ['Postos', 'Pagamentoformas']
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
        $postoPagamentoForma = $this->Postopagamentoformas->newEntity();
        if ($this->request->is('post')) {
            $postoPagamentoForma = $this->Postopagamentoformas->patchEntity($postoPagamentoForma, $this->request->data);
            if ($this->Postopagamentoformas->save($postoPagamentoForma)) {
                $this->Flash->success(__('O registro de posto pagamento forma foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de posto pagamento forma não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $postos = $this->Postopagamentoformas->Postos->find('list', ['limit' => 200]);
        $pagamentoFormas = $this->Postopagamentoformas->Pagamentoformas->find('list', ['limit' => 200]);
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
        $postoPagamentoForma = $this->Postopagamentoformas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postoPagamentoForma = $this->Postopagamentoformas->patchEntity($postoPagamentoForma, $this->request->data);
            if ($this->Postopagamentoformas->save($postoPagamentoForma)) {
                $this->Flash->success(__('O registro de posto pagamento forma foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de posto pagamento forma não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $postos = $this->Postopagamentoformas->Postos->find('list', ['limit' => 200]);
        $pagamentoFormas = $this->Postopagamentoformas->Pagamentoformas->find('list', ['limit' => 200]);
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
        $postoPagamentoForma = $this->Postopagamentoformas->get($id);
        if ($this->Postopagamentoformas->delete($postoPagamentoForma)) {
            $this->Flash->success(__('O registro de posto pagamento forma foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de posto pagamento forma não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
