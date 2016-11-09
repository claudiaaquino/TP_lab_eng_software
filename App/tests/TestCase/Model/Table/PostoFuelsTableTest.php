<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostofuelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostofuelsTable Test Case
 */
class PostofuelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostofuelsTable
     */
    public $Postofuels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.postofuels',
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
        'app.historicoprecos',
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
        $config = TableRegistry::exists('Postofuels') ? [] : ['className' => 'App\Model\Table\PostofuelsTable'];
        $this->Postofuels = TableRegistry::get('Postofuels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Postofuels);

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
