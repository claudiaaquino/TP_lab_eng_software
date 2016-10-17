<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostoPagamentoFormasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostoPagamentoFormasTable Test Case
 */
class PostoPagamentoFormasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostoPagamentoFormasTable
     */
    public $PostoPagamentoFormas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.posto_pagamento_formas',
        'app.postos',
        'app.historico_precos',
        'app.fuels',
        'app.posto_fuels',
        'app.veiculo_fuels',
        'app.veiculos',
        'app.users',
        'app.modelos',
        'app.historico_abastecimentos',
        'app.posto_pagamento_forma',
        'app.pagamento_formas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostoPagamentoFormas') ? [] : ['className' => 'App\Model\Table\PostoPagamentoFormasTable'];
        $this->PostoPagamentoFormas = TableRegistry::get('PostoPagamentoFormas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostoPagamentoFormas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
