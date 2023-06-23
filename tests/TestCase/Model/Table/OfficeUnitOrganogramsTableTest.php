<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeUnitOrganogramsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeUnitOrganogramsTable Test Case
 */
class OfficeUnitOrganogramsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeUnitOrganogramsTable
     */
    public $OfficeUnitOrganograms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeUnitOrganograms',
        'app.Offices',
        'app.OfficeUnits',
        'app.SuperiorUnits',
        'app.SuperiorDesignations',
        'app.RefOriginUnitOrgs',
        'app.RefSupOriginUnitDesigs',
        'app.RefSupOriginUnits',
        'app.EmployeeAdditionalRoles',
        'app.EmployeeOffices',
        'app.OfficeFrontDesk',
        'app.PotrojariHeaderSettings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfficeUnitOrganograms') ? [] : ['className' => OfficeUnitOrganogramsTable::class];
        $this->OfficeUnitOrganograms = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeUnitOrganograms);

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
