<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupervisorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupervisorsTable Test Case
 */
class SupervisorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SupervisorsTable
     */
    public $Supervisors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supervisors',
        'app.lecturers',
        'app.users',
        'app.attachments',
        'app.students',
        'app.theses',
        'app.examiners',
        'app.drp_logs',
        'app.mock_viva_logs',
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
        $config = TableRegistry::exists('Supervisors') ? [] : ['className' => SupervisorsTable::class];
        $this->Supervisors = TableRegistry::get('Supervisors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Supervisors);

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
