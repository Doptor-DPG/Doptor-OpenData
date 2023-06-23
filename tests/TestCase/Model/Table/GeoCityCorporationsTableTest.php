<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoCityCorporationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoCityCorporationsTable Test Case
 */
class GeoCityCorporationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoCityCorporationsTable
     */
    public $GeoCityCorporations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoCityCorporations',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoCityCorporationWards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeoCityCorporations') ? [] : ['className' => GeoCityCorporationsTable::class];
        $this->GeoCityCorporations = TableRegistry::getTableLocator()->get('GeoCityCorporations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoCityCorporations);

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
