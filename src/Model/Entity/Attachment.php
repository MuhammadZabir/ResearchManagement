<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attachment Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $student_id
 * @property int $lecturer_id
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Lecturer $lecturer
 */
class Attachment extends Entity
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
        'name' => true,
        'type' => true,
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'student_id' => true,
        'lecturer_id' => true,
        'student' => true,
        'lecturer' => true
    ];
}
