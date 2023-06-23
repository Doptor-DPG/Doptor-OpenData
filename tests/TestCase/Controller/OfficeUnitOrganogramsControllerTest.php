<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OfficeUnitOrganogramsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OfficeUnitOrganogramsController Test Case
 *
 * @uses \App\Controller\OfficeUnitOrganogramsController
 */
class OfficeUnitOrganogramsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeUnitOrganograms',
        'app.Offices',
        'app.OfficeUnits',
        'app.SuperiorUnits',
        'app.SuperiorDesignations',
        'app.RefOriginUnitOrgs',
        'app.RefSupOriginUnitDesigs',
        'app.RefSupOriginUnits',
        'app.EmployeeAdditionalRoles',
        'app.EmployeeOffices',
        'app.OfficeFrontDesk',
        'app.PotrojariHeaderSettings',
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
