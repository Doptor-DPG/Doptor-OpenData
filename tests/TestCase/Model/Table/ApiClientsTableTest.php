<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApiClientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApiClientsTable Test Case
 */
class ApiClientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApiClientsTable
     */
    public $ApiClients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ApiClients',
        'app.Clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ApiClients') ? [] : ['className' => ApiClientsTable::class];
        $this->ApiClients = TableRegistry::getTableLocator()->get('ApiClients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ApiClients);

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
