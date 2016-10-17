<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PostoFuelsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PostoFuelsController Test Case
 */
class PostoFuelsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
