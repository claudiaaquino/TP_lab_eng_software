<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PagamentoFormas Model
 *
 * @property \Cake\ORM\Association\HasMany $PostoPagamentoForma
 *
 * @method \App\Model\Entity\PagamentoForma get($primaryKey, $options = [])
 * @method \App\Model\Entity\PagamentoForma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PagamentoForma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PagamentoForma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PagamentoForma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PagamentoForma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PagamentoForma findOrCreate($search, callable $callback = null)
 */
class PagamentoFormasTable extends Table
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

        $this->table('pagamento_formas');
        $this->displayField('descricao');
        $this->primaryKey('id');

        $this->hasMany('PostoPagamentoForma', [
            'foreignKey' => 'pagamento_forma_id'
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

//        $validator
//            ->dateTime('dt_cadastro')
//            ->allowEmpty('dt_cadastro');


        return $validator;
    }
}
