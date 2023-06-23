<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeAdditionalRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeAdditionalRolesTable Test Case
 */
class EmployeeAdditionalRolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeAdditionalRolesTable
     */
    public $EmployeeAdditionalRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployeeAdditionalRoles',
        'app.OfficeUnitOrganograms',
        'app.MappedOfficeUnitOrganograms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeeAdditionalRoles') ? [] : ['className' => EmployeeAdditionalRolesTable::class];
        $this->EmployeeAdditionalRoles = TableRegistry::getTableLocator()->get('EmployeeAdditionalRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeeAdditionalRoles);

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
