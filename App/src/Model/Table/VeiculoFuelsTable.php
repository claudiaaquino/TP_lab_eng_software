<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VeiculoFuels Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Veiculos
 * @property \Cake\ORM\Association\BelongsTo $Fuels
 *
 * @method \App\Model\Entity\VeiculoFuel get($primaryKey, $options = [])
 * @method \App\Model\Entity\VeiculoFuel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VeiculoFuel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VeiculoFuel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VeiculoFuel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VeiculoFuel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VeiculoFuel findOrCreate($search, callable $callback = null)
 */
class VeiculoFuelsTable extends Table
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

        $this->table('veiculo_fuels');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Veiculos', [
            'foreignKey' => 'veiculo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fuels', [
            'foreignKey' => 'fuel_id',
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
        $rules->add($rules->existsIn(['veiculo_id'], 'Veiculos'));
        $rules->add($rules->existsIn(['fuel_id'], 'Fuels'));

        return $rules;
    }
}
