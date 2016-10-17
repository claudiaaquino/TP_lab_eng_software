<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagamentoFormasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagamentoFormasTable Test Case
 */
class PagamentoFormasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PagamentoFormasTable
     */
    public $PagamentoFormas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pagamento_formas',
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
        $config = TableRegistry::exists('PagamentoFormas') ? [] : ['className' => 'App\Model\Table\PagamentoFormasTable'];
        $this->PagamentoFormas = TableRegistry::get('PagamentoFormas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PagamentoFormas);

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
