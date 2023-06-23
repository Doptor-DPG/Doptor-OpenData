<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoUpazilasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoUpazilasTable Test Case
 */
class GeoUpazilasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoUpazilasTable
     */
    public $GeoUpazilas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoUpazilas',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoMunicipalities',
        'app.GeoMunicipalityWards',
        'app.GeoPostOffices',
        'app.GeoUnions',
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
        $config = TableRegistry::getTableLocator()->exists('GeoUpazilas') ? [] : ['className' => GeoUpazilasTable::class];
        $this->GeoUpazilas = TableRegistry::getTableLocator()->get('GeoUpazilas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoUpazilas);

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
