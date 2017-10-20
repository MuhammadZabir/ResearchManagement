<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Thesis Entity
 *
 * @property int $id
 * @property string $title
 * @property string $field_of_study
 * @property string $description
 * @property string $status_drp
 * @property int $count_drp
 * @property string $status_mock_viva
 * @property int $count_viva
 * @property string $status_viva
 * @property string $status_to_submit
 * @property \Cake\I18n\FrozenTime $submission_of_thesis
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $student_id
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\DrpLog[] $drp_logs
 * @property \App\Model\Entity\MockVivaLog[] $mock_viva_logs
 * @property \App\Model\Entity\Supervisor[] $supervisors
 * @property \App\Model\Entity\VivaLog[] $viva_logs
 */
class Thesis extends Entity
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
        'title' => true,
        'field_of_study' => true,
        'description' => true,
        'status_drp' => true,
        'count_drp' => true,
        'status_mock_viva' => true,
        'count_viva' => true,
        'status_viva' => true,
        'status_to_submit' => true,
        'submission_of_thesis' => true,
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'student_id' => true,
        'student' => true,
        'drp_logs' => true,
        'mock_viva_logs' => true,
        'supervisors' => true,
        'viva_logs' => true
    ];
}
