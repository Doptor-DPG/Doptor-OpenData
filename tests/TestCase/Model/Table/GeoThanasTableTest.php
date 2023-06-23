<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoThanasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoThanasTable Test Case
 */
class GeoThanasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoThanasTable
     */
    public $GeoThanas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoThanas',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoPostOffices',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeoThanas') ? [] : ['className' => GeoThanasTable::class];
        $this->GeoThanas = TableRegistry::getTableLocator()->get('GeoThanas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoThanas);

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
