<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricoprecosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricoprecosTable Test Case
 */
class HistoricoprecosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricoprecosTable
     */
    public $Historicoprecos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.historicoprecos',
        'app.postos',
        'app.historicoprecos',
        'app.fuels',
        'app.postofuels',
        'app.veiculofuels',
        'app.historicoabastecimentos',
        'app.veiculos',
        'app.users',
        'app.tipousuarios',
        'app.modelos',
        'app.historicoabastecimentos',
        'app.postopagamentoforma'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Historicoprecos') ? [] : ['className' => 'App\Model\Table\HistoricoprecosTable'];
        $this->Historicoprecos = TableRegistry::get('Historicoprecos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Historicoprecos);

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
