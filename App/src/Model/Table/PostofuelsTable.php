<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Postofuels Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Postos
 * @property \Cake\ORM\Association\BelongsTo $Fuels
 *
 * @method \App\Model\Entity\Postofuel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Postofuel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Postofuel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Postofuel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Postofuel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Postofuel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Postofuel findOrCreate($search, callable $callback = null)
 */
class PostofuelsTable extends Table
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

        $this->table('postofuels');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Postos', [
            'foreignKey' => 'posto_id',
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

        $validator
            ->dateTime('dt_cadastro')
            ->allowEmpty('dt_cadastro');

        $validator
            ->integer('status')
            ->allowEmpty('status');

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
        $rules->add($rules->existsIn(['fuel_id'], 'Fuels'));

        return $rules;
    }
}
