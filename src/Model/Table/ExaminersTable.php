<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Examiners Model
 *
 * @property \App\Model\Table\LecturersTable|\Cake\ORM\Association\BelongsTo $Lecturers
 * @property \App\Model\Table\DrpLogsTable|\Cake\ORM\Association\BelongsTo $DrpLogs
 * @property \App\Model\Table\MockVivaLogsTable|\Cake\ORM\Association\BelongsTo $MockVivaLogs
 * @property \App\Model\Table\VivaLogsTable|\Cake\ORM\Association\BelongsTo $VivaLogs
 *
 * @method \App\Model\Entity\Examiner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Examiner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Examiner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Examiner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Examiner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Examiner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Examiner findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExaminersTable extends Table
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

        $this->setTable('examiners');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Lecturers', [
            'foreignKey' => 'lecturer_id'
        ]);
        $this->belongsTo('DrpLogs', [
            'foreignKey' => 'drp_log_id'
        ]);
        $this->belongsTo('MockVivaLogs', [
            'foreignKey' => 'mock_viva_log_id'
        ]);
        $this->belongsTo('VivaLogs', [
            'foreignKey' => 'viva_log_id'
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
        $rules->add($rules->existsIn(['drp_log_id'], 'DrpLogs'));
        $rules->add($rules->existsIn(['mock_viva_log_id'], 'MockVivaLogs'));
        $rules->add($rules->existsIn(['viva_log_id'], 'VivaLogs'));

        return $rules;
    }
}
