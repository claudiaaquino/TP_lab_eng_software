<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PostoFuels Controller
 *
 * @property \App\Model\Table\PostoFuelsTable $PostoFuels
 */
class PostoFuelsController extends AppController
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
        $postoFuels = $this->paginate($this->PostoFuels);

        $this->set(compact('postoFuels'));
        $this->set('_serialize', ['postoFuels']);
    }

    /**
     * View method
     *
     * @param string|null $id Posto Fuel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postoFuel = $this->PostoFuels->get($id, [
            'contain' => ['Postos', 'Fuels']
        ]);

        $this->set('postoFuel', $postoFuel);
        $this->set('_serialize', ['postoFuel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postoFuel = $this->PostoFuels->newEntity();
        if ($this->request->is('post')) {
            $postoFuel = $this->PostoFuels->patchEntity($postoFuel, $this->request->data);
            if ($this->PostoFuels->save($postoFuel)) {
                $this->Flash->success(__('The posto fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The posto fuel could not be saved. Please, try again.'));
            }
        }
        $postos = $this->PostoFuels->Postos->find('list', ['limit' => 200]);
        $fuels = $this->PostoFuels->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('postoFuel', 'postos', 'fuels'));
        $this->set('_serialize', ['postoFuel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Posto Fuel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postoFuel = $this->PostoFuels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postoFuel = $this->PostoFuels->patchEntity($postoFuel, $this->request->data);
            if ($this->PostoFuels->save($postoFuel)) {
                $this->Flash->success(__('The posto fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The posto fuel could not be saved. Please, try again.'));
            }
        }
        $postos = $this->PostoFuels->Postos->find('list', ['limit' => 200]);
        $fuels = $this->PostoFuels->Fuels->find('list', ['limit' => 200]);
        $this->set(compact('postoFuel', 'postos', 'fuels'));
        $this->set('_serialize', ['postoFuel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Posto Fuel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postoFuel = $this->PostoFuels->get($id);
        if ($this->PostoFuels->delete($postoFuel)) {
            $this->Flash->success(__('The posto fuel has been deleted.'));
        } else {
            $this->Flash->error(__('The posto fuel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
