<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExaminersFixture
 *
 */
class ExaminersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created_by' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'last_modified_by' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'lecturer_id' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'drp_log_id' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'mock_viva_log_id' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'viva_log_id' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'lecturer_examiner_id_idx' => ['type' => 'index', 'columns' => ['lecturer_id'], 'length' => []],
            'mock_viva_log_examiner_id_idx' => ['type' => 'index', 'columns' => ['mock_viva_log_id'], 'length' => []],
            'drp_log_examiner_id_idx' => ['type' => 'index', 'columns' => ['drp_log_id'], 'length' => []],
            'viva_log_examiner_id_idx' => ['type' => 'index', 'columns' => ['viva_log_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'drp_log_examiner_id' => ['type' => 'foreign', 'columns' => ['drp_log_id'], 'references' => ['drp_logs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'lecturer_examiner_id' => ['type' => 'foreign', 'columns' => ['lecturer_id'], 'references' => ['lecturers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mock_viva_log_examiner_id' => ['type' => 'foreign', 'columns' => ['mock_viva_log_id'], 'references' => ['mock_viva_logs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'viva_log_examiner_id' => ['type' => 'foreign', 'columns' => ['viva_log_id'], 'references' => ['viva_logs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'created_by' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-10-19 06:48:56',
            'last_modified_by' => 'Lorem ipsum dolor sit amet',
            'modified' => '2017-10-19 06:48:56',
            'lecturer_id' => 1,
            'drp_log_id' => 1,
            'mock_viva_log_id' => 1,
            'viva_log_id' => 1
        ],
    ];
}
