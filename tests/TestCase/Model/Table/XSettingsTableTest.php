<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\XSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\XSettingsTable Test Case
 */
class XSettingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\XSettingsTable
     */
    public $XSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.XSettings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('XSettings') ? [] : ['className' => XSettingsTable::class];
        $this->XSettings = TableRegistry::getTableLocator()->get('XSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->XSettings);

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
