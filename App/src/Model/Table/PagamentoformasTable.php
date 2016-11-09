<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pagamentoformas Model
 *
 * @property \Cake\ORM\Association\HasMany $Postopagamentoformas
 *
 * @method \App\Model\Entity\Pagamentoforma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pagamentoforma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pagamentoforma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pagamentoforma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pagamentoforma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pagamentoforma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pagamentoforma findOrCreate($search, callable $callback = null)
 */
class PagamentoformasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('pagamentoformas');
        $this->displayField('descricao');
        $this->primaryKey('id');

        $this->hasMany('Postopagamentoformas', [
            'foreignKey' => 'pagamentoforma_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->dateTime('dt_cadastro')
            ->allowEmpty('dt_cadastro');

        $validator
            ->dateTime('dt_modificado')
            ->allowEmpty('dt_modificado');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
