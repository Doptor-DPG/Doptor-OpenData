<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationRegistrationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationRegistrationTable Test Case
 */
class ApplicationRegistrationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationRegistrationTable
     */
    public $ApplicationRegistration;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ApplicationRegistration',
        'app.ApiClients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ApplicationRegistration') ? [] : ['className' => ApplicationRegistrationTable::class];
        $this->ApplicationRegistration = TableRegistry::getTableLocator()->get('ApplicationRegistration', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ApplicationRegistration);

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
