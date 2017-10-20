<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LecturersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LecturersTable Test Case
 */
class LecturersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LecturersTable
     */
    public $Lecturers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lecturers',
        'app.users',
        'app.attachments',
        'app.students',
        'app.examiners',
        'app.drp_logs',
        'app.theses',
        'app.mock_viva_logs',
        'app.viva_logs',
        'app.supervisors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Lecturers') ? [] : ['className' => LecturersTable::class];
        $this->Lecturers = TableRegistry::get('Lecturers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lecturers);

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
