<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\LecturersTable|\Cake\ORM\Association\HasMany $Lecturers
 * @property \App\Model\Table\StaffsTable|\Cake\ORM\Association\HasMany $Staffs
 * @property \App\Model\Table\StudentsTable|\Cake\ORM\Association\HasMany $Students
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Lecturers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Staffs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Students', [
            'foreignKey' => 'user_id'
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
            ->scalar('login')
            ->requirePresence('login', 'create')
            ->notEmpty('login')
            ->add('login', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password_hash')
            ->allowEmpty('password_hash');

        $validator
            ->scalar('first_name')
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->allowEmpty('last_name');

        $validator
            ->email('email')
            ->allowEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('image_url')
            ->allowEmpty('image_url');

        $validator
            ->scalar('activated')
            ->requirePresence('activated', 'create')
            ->notEmpty('activated');

        $validator
            ->scalar('lang_key')
            ->allowEmpty('lang_key');

        $validator
            ->scalar('activation_key')
            ->allowEmpty('activation_key');

        $validator
            ->scalar('reset_key')
            ->allowEmpty('reset_key');

        $validator
            ->scalar('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('reset_date')
            ->allowEmpty('reset_date');

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
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
