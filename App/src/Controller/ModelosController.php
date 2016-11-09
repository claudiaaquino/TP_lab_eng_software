<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modelos Controller
 *
 * @property \App\Model\Table\ModelosTable $Modelos
 */
class ModelosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $modelos = $this->paginate($this->Modelos);

        $this->set(compact('modelos'));
        $this->set('_serialize', ['modelos']);
    }

    /**
     * View method
     *
     * @param string|null $id Modelo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modelo = $this->Modelos->get($id, [
            'contain' => ['Veiculos']
        ]);

        $this->set('modelo', $modelo);
        $this->set('_serialize', ['modelo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modelo = $this->Modelos->newEntity();
        if ($this->request->is('post')) {
            $modelo = $this->Modelos->patchEntity($modelo, $this->request->data);
            if ($this->Modelos->save($modelo)) {
                $this->Flash->success(__('O registro de modelo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de modelo não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('modelo'));
        $this->set('_serialize', ['modelo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modelo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modelo = $this->Modelos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modelo = $this->Modelos->patchEntity($modelo, $this->request->data);
            if ($this->Modelos->save($modelo)) {
                $this->Flash->success(__('O registro de modelo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro de modelo não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('modelo'));
        $this->set('_serialize', ['modelo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modelo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modelo = $this->Modelos->get($id);
        if ($this->Modelos->delete($modelo)) {
            $this->Flash->success(__('O registro de modelo foi deletado.'));
        } else {
            $this->Flash->error(__('O registro de modelo não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
