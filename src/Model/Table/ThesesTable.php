<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Theses Model
 *
 * @property \App\Model\Table\StudentsTable|\Cake\ORM\Association\BelongsTo $Students
 * @property \App\Model\Table\DrpLogsTable|\Cake\ORM\Association\HasMany $DrpLogs
 * @property \App\Model\Table\MockVivaLogsTable|\Cake\ORM\Association\HasMany $MockVivaLogs
 * @property \App\Model\Table\SupervisorsTable|\Cake\ORM\Association\HasMany $Supervisors
 * @property \App\Model\Table\VivaLogsTable|\Cake\ORM\Association\HasMany $VivaLogs
 *
 * @method \App\Model\Entity\Thesis get($primaryKey, $options = [])
 * @method \App\Model\Entity\Thesis newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Thesis[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Thesis|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Thesis patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Thesis[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Thesis findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ThesesTable extends Table
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

        $this->setTable('theses');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id'
        ]);
        $this->hasMany('DrpLogs', [
            'foreignKey' => 'thesis_id'
        ]);
        $this->hasMany('MockVivaLogs', [
            'foreignKey' => 'thesis_id'
        ]);
        $this->hasMany('Supervisors', [
            'foreignKey' => 'thesis_id'
        ]);
        $this->hasMany('VivaLogs', [
            'foreignKey' => 'thesis_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('field_of_study')
            ->requirePresence('field_of_study', 'create')
            ->notEmpty('field_of_study');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('status_drp')
            ->allowEmpty('status_drp');

        $validator
            ->integer('count_drp')
            ->allowEmpty('count_drp');

        $validator
            ->integer('count_mock_viva')
            ->allowEmpty('count_mock_viva');

        $validator
            ->scalar('status_mock_viva')
            ->allowEmpty('status_mock_viva');

        $validator
            ->integer('count_viva')
            ->allowEmpty('count_viva');

        $validator
            ->scalar('status_viva')
            ->allowEmpty('status_viva');

        $validator
            ->scalar('status_to_submit')
            ->allowEmpty('status_to_submit');

        $validator
            ->dateTime('submission_of_thesis')
            ->allowEmpty('submission_of_thesis');

        $validator
            ->scalar('created_by')
            ->allowEmpty('created_by');

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

        return $rules;
    }
}
