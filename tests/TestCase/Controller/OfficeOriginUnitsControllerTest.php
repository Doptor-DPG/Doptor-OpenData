<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OfficeOriginUnitsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OfficeOriginUnitsController Test Case
 *
 * @uses \App\Controller\OfficeOriginUnitsController
 */
class OfficeOriginUnitsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeOriginUnits',
        'app.OfficeMinistries',
        'app.OfficeLayers',
        'app.OfficeOrigins',
        'app.ParentUnits',
        'app.OfficeOriginUnitOrganograms',
        'app.OfficeUnits',
        'app.UnitUpdateHistory',
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
