<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $student_id
 * @property int $mode
 * @property string $course_code
 * @property string $status
 * @property string $igs
 * @property string $tie
 * @property string $contact_mobile
 * @property string $contact_work
 * @property string $contact_other
 * @property string $overall_completion
 * @property \Cake\I18n\FrozenTime $register_date
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Student[] $students
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Attachment[] $attachments
 * @property \App\Model\Entity\Thesis[] $theses
 */
class Student extends Entity
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
        'student_id' => true,
        'mode' => true,
        'course_code' => true,
        'status' => true,
        'igs' => true,
        'tie' => true,
        'contact_mobile' => true,
        'contact_work' => true,
        'contact_other' => true,
        'overall_completion' => true,
        'register_date' => true,
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'user_id' => true,
        'students' => true,
        'user' => true,
        'attachments' => true,
        'theses' => true
    ];
}
