<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExaminersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExaminersTable Test Case
 */
class ExaminersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExaminersTable
     */
    public $Examiners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.examiners',
        'app.lecturers',
        'app.drp_logs',
        'app.theses',
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
        $config = TableRegistry::exists('Examiners') ? [] : ['className' => ExaminersTable::class];
        $this->Examiners = TableRegistry::get('Examiners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Examiners);

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
