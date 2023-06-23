<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoMunicipalityWardsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoMunicipalityWardsTable Test Case
 */
class GeoMunicipalityWardsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoMunicipalityWardsTable
     */
    public $GeoMunicipalityWards;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoMunicipalityWards',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoUpazilas',
        'app.GeoMunicipalities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeoMunicipalityWards') ? [] : ['className' => GeoMunicipalityWardsTable::class];
        $this->GeoMunicipalityWards = TableRegistry::getTableLocator()->get('GeoMunicipalityWards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoMunicipalityWards);

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
