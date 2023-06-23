<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoCityCorporationWardsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoCityCorporationWardsTable Test Case
 */
class GeoCityCorporationWardsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoCityCorporationWardsTable
     */
    public $GeoCityCorporationWards;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoCityCorporationWards',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoCityCorporations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeoCityCorporationWards') ? [] : ['className' => GeoCityCorporationWardsTable::class];
        $this->GeoCityCorporationWards = TableRegistry::getTableLocator()->get('GeoCityCorporationWards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoCityCorporationWards);

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
