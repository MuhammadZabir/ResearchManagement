<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @property \App\Model\Table\StudentsTable|\Cake\ORM\Association\BelongsTo $Students
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AttachmentsTable|\Cake\ORM\Association\HasMany $Attachments
 * @property \App\Model\Table\StudentsTable|\Cake\ORM\Association\HasMany $Students
 * @property \App\Model\Table\ThesesTable|\Cake\ORM\Association\HasMany $Theses
 *
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StudentsTable extends Table
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

        $this->setTable('students');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Attachments', [
            'foreignKey' => 'student_id'
        ]);
        $this->hasMany('Students', [
            'foreignKey' => 'student_id'
        ]);
        $this->hasMany('Theses', [
            'foreignKey' => 'student_id'
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
            ->integer('mode')
            ->requirePresence('mode', 'create')
            ->notEmpty('mode');

        $validator
            ->scalar('course_code')
            ->requirePresence('course_code', 'create')
            ->notEmpty('course_code');

        $validator
            ->scalar('status')
            ->allowEmpty('status');

        $validator
            ->scalar('igs')
            ->requirePresence('igs', 'create')
            ->notEmpty('igs');

        $validator
            ->scalar('tie')
            ->requirePresence('tie', 'create')
            ->notEmpty('tie');

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
            ->scalar('overall_completion')
            ->requirePresence('overall_completion', 'create')
            ->notEmpty('overall_completion');

        $validator
            ->dateTime('register_date')
            ->allowEmpty('register_date');

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
        $rules->add($rules->existsIn(['student_id'], 'Students'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
