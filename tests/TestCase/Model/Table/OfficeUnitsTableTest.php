<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeUnitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeUnitsTable Test Case
 */
class OfficeUnitsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeUnitsTable
     */
    public $OfficeUnits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeUnits',
        'app.OfficeMinistries',
        'app.OfficeLayers',
        'app.Offices',
        'app.OfficeOriginUnits',
        'app.ParentUnits',
        'app.ParentOriginUnits',
        'app.DesignationUpdateHistory',
        'app.EmployeeOffices',
        'app.OfficeFrontDesk',
        'app.OfficeUnitOrganograms',
        'app.PotrojariHeaderSettings',
        'app.UnitUpdateHistory',
        'app.UserLoginHistory'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfficeUnits') ? [] : ['className' => OfficeUnitsTable::class];
        $this->OfficeUnits = TableRegistry::getTableLocator()->get('OfficeUnits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeUnits);

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
