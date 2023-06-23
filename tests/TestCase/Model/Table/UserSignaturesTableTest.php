<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserSignaturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserSignaturesTable Test Case
 */
class UserSignaturesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserSignaturesTable
     */
    public $UserSignatures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserSignatures'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserSignatures') ? [] : ['className' => UserSignaturesTable::class];
        $this->UserSignatures = TableRegistry::getTableLocator()->get('UserSignatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserSignatures);

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
