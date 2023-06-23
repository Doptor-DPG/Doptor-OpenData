<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeMinistriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeMinistriesTable Test Case
 */
class OfficeMinistriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeMinistriesTable
     */
    public $OfficeMinistries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeMinistries',
        'app.EmployeeRanks',
        'app.OfficeLayers',
        'app.OfficeLayersBk',
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
        $config = TableRegistry::getTableLocator()->exists('OfficeMinistries') ? [] : ['className' => OfficeMinistriesTable::class];
        $this->OfficeMinistries = TableRegistry::getTableLocator()->get('OfficeMinistries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeMinistries);

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
