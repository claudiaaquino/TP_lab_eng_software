<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fuels Model
 *
 * @property \Cake\ORM\Association\HasMany $Historicoprecos
 * @property \Cake\ORM\Association\HasMany $Postofuels
 * @property \Cake\ORM\Association\HasMany $Veiculofuels
 *
 * @method \App\Model\Entity\Fuel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fuel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fuel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fuel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fuel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fuel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fuel findOrCreate($search, callable $callback = null)
 */
class FuelsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('fuels');
        $this->displayField('descricao');
        $this->primaryKey('id');

        $this->hasMany('Historicoprecos', [
            'foreignKey' => 'fuel_id'
        ]);
        $this->hasMany('Postofuels', [
            'foreignKey' => 'fuel_id'
        ]);
        $this->hasMany('Veiculofuels', [
            'foreignKey' => 'fuel_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('descricao', 'create')
                ->notEmpty('descricao');


        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['descricao'], "Esse nome já está em uso. Você deve escolher outro nome."));

        return $rules;
    }

}
