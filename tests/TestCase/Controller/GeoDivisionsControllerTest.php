<?php
namespace App\Test\TestCase\Controller;

use App\Controller\GeoDivisionsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\GeoDivisionsController Test Case
 *
 * @uses \App\Controller\GeoDivisionsController
 */
class GeoDivisionsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoDivisions',
        'app.GeoCityCorporationWards',
        'app.GeoCityCorporations',
        'app.GeoDistricts',
        'app.GeoMunicipalities',
        'app.GeoMunicipalityWards',
        'app.GeoPostOffices',
        'app.GeoThanas',
        'app.GeoUnions',
        'app.GeoUpazilas',
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
