<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lecturers Model
 *
 * @property \App\Model\Table\LecturersTable|\Cake\ORM\Association\BelongsTo $Lecturers
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AttachmentsTable|\Cake\ORM\Association\HasMany $Attachments
 * @property \App\Model\Table\ExaminersTable|\Cake\ORM\Association\HasMany $Examiners
 * @property \App\Model\Table\LecturersTable|\Cake\ORM\Association\HasMany $Lecturers
 * @property \App\Model\Table\SupervisorsTable|\Cake\ORM\Association\HasMany $Supervisors
 *
 * @method \App\Model\Entity\Lecturer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lecturer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lecturer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lecturer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lecturer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lecturer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lecturer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LecturersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('lecturers');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Lecturers', [
            'foreignKey' => 'lecturer_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Attachments', [
            'foreignKey' => 'lecturer_id'
        ]);
        $this->hasMany('Examiners', [
            'foreignKey' => 'lecturer_id'
        ]);
        $this->hasMany('Lecturers', [
            'foreignKey' => 'lecturer_id'
        ]);
        $this->hasMany('Supervisors', [
            'foreignKey' => 'lecturer_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->allowEmpty('title');

        $validator
            ->scalar('internal')
            ->requirePresence('internal', 'create')
            ->notEmpty('internal');

        $validator
            ->scalar('field_of_study')
            ->allowEmpty('field_of_study');

        $validator
            ->scalar('external_university')
            ->allowEmpty('external_university');

        $validator
            ->scalar('contact_mobile')
            ->allowEmpty('contact_mobile');

        $validator
            ->scalar('contact_work')
            ->allowEmpty('contact_work');

        $validator
            ->scalar('contact_other')
            ->allowEmpty('contact_other');

        $validator
            ->scalar('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->scalar('last_modified_by')
            ->allowEmpty('last_modified_by');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['lecturer_id'], 'Lecturers'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
