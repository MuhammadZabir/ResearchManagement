<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supervisor Entity
 *
 * @property int $id
 * @property string $type
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $last_modified_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $lecturer_id
 * @property int $thesis_id
 *
 * @property \App\Model\Entity\Lecturer $lecturer
 * @property \App\Model\Entity\Thesis $thesis
 */
class Supervisor extends Entity
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
        'type' => true,
        'created_by' => true,
        'created' => true,
        'last_modified_by' => true,
        'modified' => true,
        'lecturer_id' => true,
        'thesis_id' => true,
        'lecturer' => true,
        'thesis' => true
    ];
}
