<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OfficeMinistriesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OfficeMinistriesController Test Case
 *
 * @uses \App\Controller\OfficeMinistriesController
 */
class OfficeMinistriesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeMinistries',
        'app.EmployeeRanks',
        'app.OfficeLayers',
        'app.OfficeLayersBk',
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
