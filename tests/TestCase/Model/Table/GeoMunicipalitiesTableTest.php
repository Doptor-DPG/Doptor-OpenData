<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoMunicipalitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoMunicipalitiesTable Test Case
 */
class GeoMunicipalitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoMunicipalitiesTable
     */
    public $GeoMunicipalities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GeoMunicipalities',
        'app.GeoDivisions',
        'app.GeoDistricts',
        'app.GeoUpazilas',
        'app.GeoMunicipalityWards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeoMunicipalities') ? [] : ['className' => GeoMunicipalitiesTable::class];
        $this->GeoMunicipalities = TableRegistry::getTableLocator()->get('GeoMunicipalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoMunicipalities);

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
