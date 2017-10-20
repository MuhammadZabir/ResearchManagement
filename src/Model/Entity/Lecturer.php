<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lecturer Entity
 *
 * @property int $id
 * @property string $lecturer_id
 * @property string $title
 * @property string $internal
 * @property string $field_of_study
 * @property string $external_university
 * @property string $contact_mobile
 * @property string $contact_work
 * @property string $contact_other
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Lecturer[] $lecturers
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Attachment[] $attachments
 * @property \App\Model\Entity\Examiner[] $examiners
 * @property \App\Model\Entity\Supervisor[] $supervisors
 */
class Lecturer extends Entity
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
        'lecturer_id' => true,
        'title' => true,
        'internal' => true,
        'field_of_study' => true,
        'external_university' => true,
        'contact_mobile' => true,
        'contact_work' => true,
        'contact_other' => true,
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'user_id' => true,
        'lecturers' => true,
        'user' => true,
        'attachments' => true,
        'examiners' => true,
        'supervisors' => true
    ];
}
