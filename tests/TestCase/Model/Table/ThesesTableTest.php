<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThesesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThesesTable Test Case
 */
class ThesesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ThesesTable
     */
    public $Theses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.theses',
        'app.students',
        'app.users',
        'app.attachments',
        'app.lecturers',
        'app.examiners',
        'app.drp_logs',
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
        $config = TableRegistry::exists('Theses') ? [] : ['className' => ThesesTable::class];
        $this->Theses = TableRegistry::get('Theses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Theses);

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
