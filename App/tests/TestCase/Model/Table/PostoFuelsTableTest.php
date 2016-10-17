<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostoFuelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostoFuelsTable Test Case
 */
class PostoFuelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostoFuelsTable
     */
    public $PostoFuels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.posto_fuels',
        'app.postos',
        'app.historico_precos',
        'app.fuels',
        'app.veiculo_fuels',
        'app.veiculos',
        'app.users',
        'app.modelos',
        'app.historico_abastecimentos',
        'app.posto_pagamento_forma'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostoFuels') ? [] : ['className' => 'App\Model\Table\PostoFuelsTable'];
        $this->PostoFuels = TableRegistry::get('PostoFuels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostoFuels);

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
