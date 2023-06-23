<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeRecordsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeRecordsTable Test Case
 */
class EmployeeRecordsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeRecordsTable
     */
    public $EmployeeRecords;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeeRecords') ? [] : ['className' => EmployeeRecordsTable::class];
        $this->EmployeeRecords = TableRegistry::getTableLocator()->get('EmployeeRecords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeeRecords);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
