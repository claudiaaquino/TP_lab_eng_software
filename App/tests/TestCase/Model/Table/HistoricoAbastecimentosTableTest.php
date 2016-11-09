<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricoabastecimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricoabastecimentosTable Test Case
 */
class HistoricoabastecimentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricoabastecimentosTable
     */
    public $Historicoabastecimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.historicoabastecimentos',
        'app.veiculos',
        'app.users',
        'app.tipousuarios',
        'app.modelos',
        'app.historicoabastecimentos',
        'app.historicoprecos',
        'app.veiculofuels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Historicoabastecimentos') ? [] : ['className' => 'App\Model\Table\HistoricoabastecimentosTable'];
        $this->Historicoabastecimentos = TableRegistry::get('Historicoabastecimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Historicoabastecimentos);

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
