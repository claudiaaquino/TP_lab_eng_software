<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostoPagamentoFormas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Postos
 * @property \Cake\ORM\Association\BelongsTo $PagamentoFormas
 *
 * @method \App\Model\Entity\PostoPagamentoForma get($primaryKey, $options = [])
 * @method \App\Model\Entity\PostoPagamentoForma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PostoPagamentoForma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PostoPagamentoForma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PostoPagamentoForma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PostoPagamentoForma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PostoPagamentoForma findOrCreate($search, callable $callback = null)
 */
class PostoPagamentoFormasTable extends Table
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

        $this->table('posto_pagamento_formas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Postos', [
            'foreignKey' => 'posto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PagamentoFormas', [
            'foreignKey' => 'pagamento_forma_id',
            'joinType' => 'INNER'
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


        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['posto_id'], 'Postos'));
        $rules->add($rules->existsIn(['pagamento_forma_id'], 'PagamentoFormas'));

        return $rules;
    }
}
