<?php
namespace App\Test\TestCase\Controller;

use App\Controller\LecturersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\LecturersController Test Case
 */
class LecturersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lecturers',
        'app.users',
        'app.staffs',
        'app.students',
        'app.attachments',
        'app.theses',
        'app.drp_logs',
        'app.examiners',
        'app.mock_viva_logs',
        'app.viva_logs',
        'app.supervisors'
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
