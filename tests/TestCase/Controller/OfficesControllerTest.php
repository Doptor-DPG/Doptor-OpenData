<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OfficesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OfficesController Test Case
 *
 * @uses \App\Controller\OfficesController
 */
class OfficesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Offices',
        'app.OfficeMinistries',
        'app.OfficeLayers',
        'app.CustomLayers',
        'app.OfficeOrigins',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoUpazilas',
        'app.GeoUnions',
        'app.ParentOffices',
        'app.DakActions',
        'app.DesignationUpdateHistory',
        'app.EmployeeOfficeDomains',
        'app.EmployeeOffices',
        'app.ErrorLog',
        'app.NothiArchiveRequests',
        'app.NothiDecisions',
        'app.NotificationSettings',
        'app.OfficeDomains',
        'app.OfficeDomainsWithoutSsl',
        'app.OfficeFrontDesk',
        'app.OfficeHealthStatus',
        'app.OfficeSegregationLogs',
        'app.OfficeUnitOrganograms',
        'app.OfficeUnits',
        'app.PotrojariHeaderSettings',
        'app.PotrojariRequest',
        'app.UnitUpdateHistory',
        'app.UserLoginHistory',
        'app.ViewOfficeDashboard'
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
