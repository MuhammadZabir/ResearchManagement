<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MockVivaLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MockVivaLogsTable Test Case
 */
class MockVivaLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MockVivaLogsTable
     */
    public $MockVivaLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mock_viva_logs',
        'app.theses',
        'app.examiners',
        'app.lecturers',
        'app.users',
        'app.attachments',
        'app.students',
        'app.supervisors',
        'app.drp_logs',
        'app.viva_logs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MockVivaLogs') ? [] : ['className' => MockVivaLogsTable::class];
        $this->MockVivaLogs = TableRegistry::get('MockVivaLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MockVivaLogs);

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
