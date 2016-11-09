<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagamentoformasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagamentoformasTable Test Case
 */
class PagamentoformasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PagamentoformasTable
     */
    public $Pagamentoformas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pagamentoformas',
        'app.postopagamentoformas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pagamentoformas') ? [] : ['className' => 'App\Model\Table\PagamentoformasTable'];
        $this->Pagamentoformas = TableRegistry::get('Pagamentoformas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pagamentoformas);

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
