<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MockVivaLog Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $schedule_date
 * @property string $comment
 * @property string $result_status
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $thesis_id
 *
 * @property \App\Model\Entity\Thesis $thesis
 * @property \App\Model\Entity\Examiner[] $examiners
 */
class MockVivaLog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'schedule_date' => true,
        'comment' => true,
        'result_status' => true,
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'thesis_id' => true,
        'thesis' => true,
        'examiners' => true
    ];
}
