<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoUnionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoUnionsTable Test Case
 */
class GeoUnionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoUnionsTable
     */
    public $GeoUnions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoUnions',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoUpazilas',
        'app.Offices',
        'app.OfficesBk'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeoUnions') ? [] : ['className' => GeoUnionsTable::class];
        $this->GeoUnions = TableRegistry::getTableLocator()->get('GeoUnions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoUnions);

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
