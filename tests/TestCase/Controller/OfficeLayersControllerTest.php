<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OfficeLayersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OfficeLayersController Test Case
 *
 * @uses \App\Controller\OfficeLayersController
 */
class OfficeLayersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeLayers',
        'app.OfficeMinistries',
        'app.ParentLayers',
        'app.CustomLayers',
        'app.OfficeOriginUnits',
        'app.OfficeOrigins',
        'app.OfficeUnits',
        'app.Offices',
        'app.OfficesBk'
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
