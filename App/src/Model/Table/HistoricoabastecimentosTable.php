<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Historicoabastecimentos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Veiculos
 * @property \Cake\ORM\Association\BelongsTo $Historicoprecos
 *
 * @method \App\Model\Entity\Historicoabastecimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Historicoabastecimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Historicoabastecimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historicoabastecimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historicoabastecimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Historicoabastecimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historicoabastecimento findOrCreate($search, callable $callback = null)
 */
class HistoricoabastecimentosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('historicoabastecimentos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Veiculos', [
            'foreignKey' => 'veiculo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Historicoprecos', [
            'foreignKey' => 'historicopreco_id',
            'joinType' => 'INNER'
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
                ->numeric('litros')
                ->requirePresence('litros', 'create')
                ->notEmpty('litros');

        $validator
                ->numeric('valor_total')->allowEmpty('valor_total');
//            ->requirePresence('valor_total', 'create')
//            ->notEmpty('valor_total');

        $validator
                ->integer('km_atual')
                ->allowEmpty('km_atual');

        $validator
                ->numeric('consumo_ult_abastecimento')
                ->allowEmpty('consumo_ult_abastecimento');

        $validator
                ->integer('avaliacao_posto')
                ->greaterThan('avaliacao_posto',0,"A avaliação do Posto deve ser entre 1 e 5.")
                ->lessThanOrEqual('avaliacao_posto',5,"A avaliação do Posto deve ser entre 1 e 5.")
                ->allowEmpty('avaliacao_posto');

        $validator
                ->dateTime('dt_abastecimento')
                ->allowEmpty('dt_abastecimento');

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
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['veiculo_id'], 'Veiculos'));
        $rules->add($rules->existsIn(['historicopreco_id'], 'Historicoprecos'));

        return $rules;
    }

}
