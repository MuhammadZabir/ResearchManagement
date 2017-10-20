<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Examiner Entity
 *
 * @property int $id
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $lecturer_id
 * @property int $drp_log_id
 * @property int $mock_viva_log_id
 * @property int $viva_log_id
 *
 * @property \App\Model\Entity\Lecturer $lecturer
 * @property \App\Model\Entity\DrpLog $drp_log
 * @property \App\Model\Entity\MockVivaLog $mock_viva_log
 * @property \App\Model\Entity\VivaLog $viva_log
 */
class Examiner extends Entity
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
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'lecturer_id' => true,
        'drp_log_id' => true,
        'mock_viva_log_id' => true,
        'viva_log_id' => true,
        'lecturer' => true,
        'drp_log' => true,
        'mock_viva_log' => true,
        'viva_log' => true
    ];
}
