<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VivaLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VivaLogsTable Test Case
 */
class VivaLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VivaLogsTable
     */
    public $VivaLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.viva_logs',
        'app.theses',
        'app.students',
        'app.users',
        'app.lecturers',
        'app.attachments',
        'app.examiners',
        'app.drp_logs',
        'app.mock_viva_logs',
        'app.supervisors',
        'app.staffs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VivaLogs') ? [] : ['className' => VivaLogsTable::class];
        $this->VivaLogs = TableRegistry::get('VivaLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VivaLogs);

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
