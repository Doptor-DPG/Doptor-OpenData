<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeOriginUnitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeOriginUnitsTable Test Case
 */
class OfficeOriginUnitsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeOriginUnitsTable
     */
    public $OfficeOriginUnits;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfficeOriginUnits') ? [] : ['className' => OfficeOriginUnitsTable::class];
        $this->OfficeOriginUnits = TableRegistry::getTableLocator()->get('OfficeOriginUnits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeOriginUnits);

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
