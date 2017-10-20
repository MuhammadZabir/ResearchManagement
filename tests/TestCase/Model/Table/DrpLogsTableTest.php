<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrpLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrpLogsTable Test Case
 */
class DrpLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DrpLogsTable
     */
    public $DrpLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.drp_logs',
        'app.theses',
        'app.examiners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DrpLogs') ? [] : ['className' => DrpLogsTable::class];
        $this->DrpLogs = TableRegistry::get('DrpLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DrpLogs);

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
