<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property string $staff_id
 * @property string $rank
 * @property string $contact_mobile
 * @property string $contact_work
 * @property string $contact_other
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Staff[] $staffs
 * @property \App\Model\Entity\User $user
 */
class Staff extends Entity
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
        'staff_id' => true,
        'rank' => true,
        'contact_mobile' => true,
        'contact_work' => true,
        'contact_other' => true,
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'user_id' => true,
        'staffs' => true,
        'user' => true
    ];
}
