<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostosTable Test Case
 */
class PostosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostosTable
     */
    public $Postos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.postos',
        'app.historico_precos',
        'app.posto_fuels',
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
        $config = TableRegistry::exists('Postos') ? [] : ['className' => 'App\Model\Table\PostosTable'];
        $this->Postos = TableRegistry::get('Postos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Postos);

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
}