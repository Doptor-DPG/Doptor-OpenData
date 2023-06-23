<?php
namespace App\Test\TestCase\Controller;

use App\Controller\GeoDistrictsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\GeoDistrictsController Test Case
 *
 * @uses \App\Controller\GeoDistrictsController
 */
class GeoDistrictsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoDistricts',
        'app.GeoDivisions',
        'app.GeoCityCorporationWards',
        'app.GeoCityCorporations',
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
