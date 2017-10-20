<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supervisors Model
 *
 * @property \App\Model\Table\LecturersTable|\Cake\ORM\Association\BelongsTo $Lecturers
 * @property \App\Model\Table\ThesesTable|\Cake\ORM\Association\BelongsTo $Theses
 *
 * @method \App\Model\Entity\Supervisor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supervisor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Supervisor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supervisor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supervisor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supervisor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supervisor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SupervisorsTable extends Table
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

        $this->setTable('supervisors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Lecturers', [
            'foreignKey' => 'lecturer_id'
        ]);
        $this->belongsTo('Theses', [
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
            ->scalar('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');

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
        $rules->add($rules->existsIn(['thesis_id'], 'Theses'));

        return $rules;
    }
}
