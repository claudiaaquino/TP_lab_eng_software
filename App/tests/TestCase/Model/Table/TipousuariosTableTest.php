<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipousuariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipousuariosTable Test Case
 */
class TipousuariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipousuariosTable
     */
    public $Tipousuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipousuarios',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipousuarios') ? [] : ['className' => 'App\Model\Table\TipousuariosTable'];
        $this->Tipousuarios = TableRegistry::get('Tipousuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipousuarios);

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
