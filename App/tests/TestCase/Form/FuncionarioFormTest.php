<?php
namespace App\Test\TestCase\Form;

use App\Form\FuncionarioForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\FuncionarioForm Test Case
 */
class FuncionarioFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\FuncionarioForm
     */
    public $Funcionario;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Funcionario = new FuncionarioForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Funcionario);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
