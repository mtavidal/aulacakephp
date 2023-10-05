<?php
namespace App\Test\TestCase\Form;

use App\Form\ContatoForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ContatoForm Test Case
 */
class ContatoFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\ContatoForm
     */
    public $Contato;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Contato = new ContatoForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contato);

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
