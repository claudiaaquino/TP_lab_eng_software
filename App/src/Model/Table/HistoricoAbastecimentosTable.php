<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HistoricoAbastecimentos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Veiculos
 * @property \Cake\ORM\Association\BelongsTo $HistoricoPrecos
 *
 * @method \App\Model\Entity\HistoricoAbastecimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\HistoricoAbastecimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HistoricoAbastecimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HistoricoAbastecimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HistoricoAbastecimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HistoricoAbastecimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HistoricoAbastecimento findOrCreate($search, callable $callback = null)
 */
class HistoricoAbastecimentosTable extends Table
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

        $this->table('historico_abastecimentos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Veiculos', [
            'foreignKey' => 'veiculo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('HistoricoPrecos', [
            'foreignKey' => 'historico_preco_id',
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
            ->numeric('litros')
            ->requirePresence('litros', 'create')
            ->notEmpty('litros');

        $validator
            ->numeric('valor_total')
            ->requirePresence('valor_total', 'create')
            ->notEmpty('valor_total');

        $validator
            ->integer('km_atual')
            ->allowEmpty('km_atual');

        $validator
            ->numeric('consumo_ult_abastecimento')
            ->allowEmpty('consumo_ult_abastecimento');

        $validator
            ->integer('avaliacao_posto')
            ->allowEmpty('avaliacao_posto');

//        $validator
//            ->dateTime('dt_abastecimento')
//            ->allowEmpty('dt_abastecimento');


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
        $rules->add($rules->existsIn(['historico_preco_id'], 'HistoricoPrecos'));

        return $rules;
    }
}
