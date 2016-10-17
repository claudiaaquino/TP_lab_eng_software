<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricoPrecosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricoPrecosTable Test Case
 */
class HistoricoPrecosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricoPrecosTable
     */
    public $HistoricoPrecos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.historico_precos',
        'app.postos',
        'app.posto_fuels',
        'app.posto_pagamento_forma',
        'app.fuels',
        'app.veiculo_fuels',
        'app.historico_abastecimentos',
        'app.veiculos',
        'app.users',
        'app.modelos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HistoricoPrecos') ? [] : ['className' => 'App\Model\Table\HistoricoPrecosTable'];
        $this->HistoricoPrecos = TableRegistry::get('HistoricoPrecos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HistoricoPrecos);

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
