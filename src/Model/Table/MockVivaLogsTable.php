<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MockVivaLogs Model
 *
 * @property \App\Model\Table\ThesesTable|\Cake\ORM\Association\BelongsTo $Theses
 * @property \App\Model\Table\ExaminersTable|\Cake\ORM\Association\HasMany $Examiners
 *
 * @method \App\Model\Entity\MockVivaLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\MockVivaLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MockVivaLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MockVivaLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MockVivaLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MockVivaLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MockVivaLog findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MockVivaLogsTable extends Table
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

        $this->setTable('mock_viva_logs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Theses', [
            'foreignKey' => 'thesis_id'
        ]);
        $this->hasMany('Examiners', [
            'foreignKey' => 'mock_viva_log_id'
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
            ->dateTime('schedule_date')
            ->requirePresence('schedule_date', 'create')
            ->notEmpty('schedule_date');

        $validator
            ->scalar('comment')
            ->allowEmpty('comment');

        $validator
            ->scalar('result_status')
            ->allowEmpty('result_status');

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
        $rules->add($rules->existsIn(['thesis_id'], 'Theses'));

        return $rules;
    }
}
