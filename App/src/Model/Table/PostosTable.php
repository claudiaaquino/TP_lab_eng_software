<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Postos Model
 *
 * @property \Cake\ORM\Association\HasMany $HistoricoPrecos
 * @property \Cake\ORM\Association\HasMany $PostoFuels
 * @property \Cake\ORM\Association\HasMany $PostoPagamentoForma
 *
 * @method \App\Model\Entity\Posto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Posto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Posto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Posto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Posto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Posto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Posto findOrCreate($search, callable $callback = null)
 */
class PostosTable extends Table
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

        $this->table('postos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('HistoricoPrecos', [
            'foreignKey' => 'posto_id'
        ]);
//        $this->hasMany('PostoFuels', [
//            'foreignKey' => 'posto_id'
//        ]);
        $this->belongsToMany('Fuels', [
            'through' => 'PostoFuels',
            'foreignKey' => 'posto_id'
        ]);
        $this->hasMany('PostoPagamentoForma', [
            'foreignKey' => 'posto_id'
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

//        $validator
//            ->dateTime('dt_cadastro')
//            ->allowEmpty('dt_cadastro');

        return $validator;
    }
}