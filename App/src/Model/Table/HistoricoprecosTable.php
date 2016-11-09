<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Historicoprecos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Postos
 * @property \Cake\ORM\Association\BelongsTo $Fuels
 * @property \Cake\ORM\Association\HasMany $Historicoabastecimentos
 *
 * @method \App\Model\Entity\Historicopreco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Historicopreco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Historicopreco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historicopreco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historicopreco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Historicopreco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historicopreco findOrCreate($search, callable $callback = null)
 */
class HistoricoprecosTable extends Table
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

        $this->table('historicoprecos');
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
        $this->hasMany('Historicoabastecimentos', [
            'foreignKey' => 'historicopreco_id'
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
            ->numeric('preco_litro')
            ->requirePresence('preco_litro', 'create')
            ->notEmpty('preco_litro');

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
