<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeOriginUnitOrganogramsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeOriginUnitOrganogramsTable Test Case
 */
class OfficeOriginUnitOrganogramsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeOriginUnitOrganogramsTable
     */
    public $OfficeOriginUnitOrganograms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeOriginUnitOrganograms',
        'app.OfficeOriginUnits',
        'app.SuperiorUnits',
        'app.SuperiorDesignations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfficeOriginUnitOrganograms') ? [] : ['className' => OfficeOriginUnitOrganogramsTable::class];
        $this->OfficeOriginUnitOrganograms = TableRegistry::getTableLocator()->get('OfficeOriginUnitOrganograms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeOriginUnitOrganograms);

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
