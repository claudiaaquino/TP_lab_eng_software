<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Postopagamentoformas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Postos
 * @property \Cake\ORM\Association\BelongsTo $Pagamentoformas
 *
 * @method \App\Model\Entity\Postopagamentoforma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Postopagamentoforma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Postopagamentoforma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Postopagamentoforma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Postopagamentoforma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Postopagamentoforma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Postopagamentoforma findOrCreate($search, callable $callback = null)
 */
class PostopagamentoformasTable extends Table
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

        $this->table('postopagamentoformas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Postos', [
            'foreignKey' => 'posto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pagamentoformas', [
            'foreignKey' => 'pagamentoforma_id',
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
        $rules->add($rules->existsIn(['pagamentoforma_id'], 'Pagamentoformas'));

        return $rules;
    }
}
