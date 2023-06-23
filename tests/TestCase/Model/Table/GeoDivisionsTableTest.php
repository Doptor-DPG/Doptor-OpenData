<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoDivisionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoDivisionsTable Test Case
 */
class GeoDivisionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoDivisionsTable
     */
    public $GeoDivisions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoDivisions',
        'app.GeoCityCorporationWards',
        'app.GeoCityCorporations',
        'app.GeoDistricts',
        'app.GeoMunicipalities',
        'app.GeoMunicipalityWards',
        'app.GeoPostOffices',
        'app.GeoThanas',
        'app.GeoUnions',
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
        $config = TableRegistry::getTableLocator()->exists('GeoDivisions') ? [] : ['className' => GeoDivisionsTable::class];
        $this->GeoDivisions = TableRegistry::getTableLocator()->get('GeoDivisions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoDivisions);

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
}
