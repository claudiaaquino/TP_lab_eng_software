<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VeiculoFuelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VeiculoFuelsTable Test Case
 */
class VeiculoFuelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VeiculoFuelsTable
     */
    public $VeiculoFuels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.veiculo_fuels',
        'app.veiculos',
        'app.users',
        'app.modelos',
        'app.historico_abastecimentos',
        'app.historico_precos',
        'app.postos',
        'app.posto_fuels',
        'app.posto_pagamento_forma',
        'app.fuels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VeiculoFuels') ? [] : ['className' => 'App\Model\Table\VeiculoFuelsTable'];
        $this->VeiculoFuels = TableRegistry::get('VeiculoFuels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VeiculoFuels);

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
