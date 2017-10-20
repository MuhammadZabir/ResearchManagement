<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AttachmentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AttachmentsController Test Case
 */
class AttachmentsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attachments',
        'app.students',
        'app.users',
        'app.lecturers',
        'app.examiners',
        'app.drp_logs',
        'app.theses',
        'app.mock_viva_logs',
        'app.supervisors',
        'app.viva_logs',
        'app.staffs'
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
