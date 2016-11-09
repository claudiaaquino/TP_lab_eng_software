<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Postos Controller
 *
 * @property \App\Model\Table\PostosTable $Postos
 */
class PostosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        if ($this->Auth->user('tipousuario_id') == '3') { //o posto está logado
            $postos = $this->paginate($this->Postos->find()->where(['user_id' => $this->Auth->user('id')]));
        } else {
            $postos = $this->paginate($this->Postos);
        }

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
    public function view($id = null) {
        $posto = $this->Postos->get($id, [
            'contain' => ['Historicoprecos.Fuels', 'Postofuels.Fuels', 'Postopagamentoformas']
        ]);

        $this->set('posto', $posto);
        $this->set('_serialize', ['posto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $posto = $this->Postos->newEntity();
        if ($this->request->is('post')) {
            $posto = $this->Postos->patchEntity($posto, $this->request->data);
            if ($this->Auth->user('tipousuario_id') == '3') {// o posto esta add um posto no usuario dele, 
                $posto->user_id = $this->Auth->user('id');
            }
            if ($this->Postos->save($posto)) {
                $this->Flash->success(__('O registro de posto foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de posto não pôde ser salvo. Por favor, tente novamente.'));
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
    public function edit($id = null) {
        $posto = $this->Postos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $posto = $this->Postos->patchEntity($posto, $this->request->data);
            if ($this->Postos->save($posto)) {
                $this->Flash->success(__('O registro de posto foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de posto não pôde ser salvo. Por favor, tente novamente.'));
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
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $posto = $this->Postos->get($id);
        if ($this->Postos->delete($posto)) {
            $this->Flash->success(__('O registro de posto foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de posto não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
