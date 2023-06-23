<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmployeeRecordsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EmployeeRecordsController Test Case
 *
 * @uses \App\Controller\EmployeeRecordsController
 */
class EmployeeRecordsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployeeRecords',
        'app.EmployeeCadres',
        'app.EmployeeBatches',
        'app.ServiceRanks',
        'app.ServiceGrades',
        'app.ServiceMinistries',
        'app.ServiceOffices',
        'app.CurrentOfficeMinistries',
        'app.CurrentOfficeLayers',
        'app.CurrentOffices',
        'app.CurrentOfficeUnits',
        'app.CurrentOfficeDesignations',
        'app.Certs',
        'app.ApiTokens',
        'app.DamiSmsRequest',
        'app.EmployeeOfficeDomains',
        'app.EmployeeOffices',
        'app.EmployeeSchedules',
        'app.PotrojariHeaderSettings',
        'app.SummaryNothiUsers',
        'app.UserLoginHistory',
        'app.Users'
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
