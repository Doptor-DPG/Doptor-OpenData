<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeUnitCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeUnitCategoriesTable Test Case
 */
class OfficeUnitCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeUnitCategoriesTable
     */
    public $OfficeUnitCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeUnitCategories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfficeUnitCategories') ? [] : ['className' => OfficeUnitCategoriesTable::class];
        $this->OfficeUnitCategories = TableRegistry::getTableLocator()->get('OfficeUnitCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeUnitCategories);

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
