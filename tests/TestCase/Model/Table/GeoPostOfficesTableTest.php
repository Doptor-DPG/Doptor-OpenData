<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoPostOfficesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoPostOfficesTable Test Case
 */
class GeoPostOfficesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoPostOfficesTable
     */
    public $GeoPostOffices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoPostOffices',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoUpazilas',
        'app.GeoThanas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeoPostOffices') ? [] : ['className' => GeoPostOfficesTable::class];
        $this->GeoPostOffices = TableRegistry::getTableLocator()->get('GeoPostOffices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoPostOffices);

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
