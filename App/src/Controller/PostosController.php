<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Postos Controller
 *
 * @property \App\Model\Table\PostosTable $Postos
 */
class PostosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $postos = $this->paginate($this->Postos);

        $this->set(compact('postos'));
        $this->set('_serialize', ['postos']);
    }

    /**
     * View method
     *
     * @param string|null $id Posto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $posto = $this->Postos->get($id, [
            'contain' => ['HistoricoPrecos', 'PostoFuels', 'PostoPagamentoForma']
        ]);

        $this->set('posto', $posto);
        $this->set('_serialize', ['posto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $posto = $this->Postos->newEntity();
        if ($this->request->is('post')) {
            $posto = $this->Postos->patchEntity($posto, $this->request->data);
            if ($this->Postos->save($posto)) {
                $this->Flash->success(__('The posto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The posto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('posto'));
        $this->set('_serialize', ['posto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Posto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $posto = $this->Postos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $posto = $this->Postos->patchEntity($posto, $this->request->data);
            if ($this->Postos->save($posto)) {
                $this->Flash->success(__('The posto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The posto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('posto'));
        $this->set('_serialize', ['posto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Posto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $posto = $this->Postos->get($id);
        if ($this->Postos->delete($posto)) {
            $this->Flash->success(__('The posto has been deleted.'));
        } else {
            $this->Flash->error(__('The posto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
