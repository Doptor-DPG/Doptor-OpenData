<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeInchargeTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeInchargeTypesTable Test Case
 */
class OfficeInchargeTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeInchargeTypesTable
     */
    public $OfficeInchargeTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeInchargeTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfficeInchargeTypes') ? [] : ['className' => OfficeInchargeTypesTable::class];
        $this->OfficeInchargeTypes = TableRegistry::getTableLocator()->get('OfficeInchargeTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeInchargeTypes);

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
