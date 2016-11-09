<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VeiculofuelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VeiculofuelsTable Test Case
 */
class VeiculofuelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VeiculofuelsTable
     */
    public $Veiculofuels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.veiculofuels',
        'app.veiculos',
        'app.users',
        'app.tipousuarios',
        'app.modelos',
        'app.historicoabastecimentos',
        'app.historicoprecos',
        'app.postos',
        'app.historicoprecos',
        'app.fuels',
        'app.postofuels',
        'app.veiculofuels',
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
        $config = TableRegistry::exists('Veiculofuels') ? [] : ['className' => 'App\Model\Table\VeiculofuelsTable'];
        $this->Veiculofuels = TableRegistry::get('Veiculofuels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Veiculofuels);

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
