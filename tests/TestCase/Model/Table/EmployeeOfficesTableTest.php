<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeOfficesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeOfficesTable Test Case
 */
class EmployeeOfficesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeOfficesTable
     */
    public $EmployeeOffices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployeeOffices',
        'app.EmployeeRecords',
        'app.Offices',
        'app.OfficeUnits',
        'app.OfficeUnitOrganograms',
        'app.MainRoles',
        'app.DesignationUpdateHistory',
        'app.UnitUpdateHistory'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeeOffices') ? [] : ['className' => EmployeeOfficesTable::class];
        $this->EmployeeOffices = TableRegistry::getTableLocator()->get('EmployeeOffices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeeOffices);

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
