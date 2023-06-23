<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeLayersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeLayersTable Test Case
 */
class OfficeLayersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeLayersTable
     */
    public $OfficeLayers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeLayers',
        'app.OfficeMinistries',
        'app.ParentLayers',
        'app.CustomLayers',
        'app.OfficeOriginUnits',
        'app.OfficeOrigins',
        'app.OfficeUnits',
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
        $config = TableRegistry::getTableLocator()->exists('OfficeLayers') ? [] : ['className' => OfficeLayersTable::class];
        $this->OfficeLayers = TableRegistry::getTableLocator()->get('OfficeLayers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeLayers);

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
