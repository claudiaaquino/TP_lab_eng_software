<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fuels Controller
 *
 * @property \App\Model\Table\FuelsTable $Fuels
 */
class FuelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fuels = $this->paginate($this->Fuels);

        $this->set(compact('fuels'));
        $this->set('_serialize', ['fuels']);
    }

    /**
     * View method
     *
     * @param string|null $id Fuel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fuel = $this->Fuels->get($id, [
            'contain' => ['HistoricoPrecos', 'PostoFuels', 'VeiculoFuels']
        ]);

        $this->set('fuel', $fuel);
        $this->set('_serialize', ['fuel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fuel = $this->Fuels->newEntity();
        if ($this->request->is('post')) {
            $fuel = $this->Fuels->patchEntity($fuel, $this->request->data);
            if ($this->Fuels->save($fuel)) {
                $this->Flash->success(__('The fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fuel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fuel'));
        $this->set('_serialize', ['fuel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fuel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fuel = $this->Fuels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fuel = $this->Fuels->patchEntity($fuel, $this->request->data);
            if ($this->Fuels->save($fuel)) {
                $this->Flash->success(__('The fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fuel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fuel'));
        $this->set('_serialize', ['fuel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fuel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fuel = $this->Fuels->get($id);
        if ($this->Fuels->delete($fuel)) {
            $this->Flash->success(__('The fuel has been deleted.'));
        } else {
            $this->Flash->error(__('The fuel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
