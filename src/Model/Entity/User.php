<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $login
 * @property string $password_hash
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $image_url
 * @property string $activated
 * @property string $lang_key
 * @property string $activation_key
 * @property string $reset_key
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $reset_date
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Lecturer[] $lecturers
 * @property \App\Model\Entity\Staff[] $staffs
 * @property \App\Model\Entity\Student[] $students
 */
class User extends Entity
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
        'login' => true,
        'password_hash' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'image_url' => true,
        'activated' => true,
        'lang_key' => true,
        'activation_key' => true,
        'reset_key' => true,
        'created_by' => true,
        'created' => true,
        'reset_date' => true,
        'last_modified_by' => true,
        'modified' => true,
        'lecturers' => true,
        'staffs' => true,
        'students' => true
    ];
}
