<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($user->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password Hash') ?></th>
            <td><?= h($user->password_hash) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Url') ?></th>
            <td><?= h($user->image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activated') ?></th>
            <td><?= h($user->activated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lang Key') ?></th>
            <td><?= h($user->lang_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activation Key') ?></th>
            <td><?= h($user->activation_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reset Key') ?></th>
            <td><?= h($user->reset_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($user->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($user->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reset Date') ?></th>
            <td><?= h($user->reset_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lecturers') ?></h4>
        <?php if (!empty($user->lecturers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lecturer Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Internal') ?></th>
                <th scope="col"><?= __('Field Of Study') ?></th>
                <th scope="col"><?= __('External University') ?></th>
                <th scope="col"><?= __('Contact Mobile') ?></th>
                <th scope="col"><?= __('Contact Work') ?></th>
                <th scope="col"><?= __('Contact Other') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->lecturers as $lecturers): ?>
            <tr>
                <td><?= h($lecturers->id) ?></td>
                <td><?= h($lecturers->lecturer_id) ?></td>
                <td><?= h($lecturers->title) ?></td>
                <td><?= h($lecturers->internal) ?></td>
                <td><?= h($lecturers->field_of_study) ?></td>
                <td><?= h($lecturers->external_university) ?></td>
                <td><?= h($lecturers->contact_mobile) ?></td>
                <td><?= h($lecturers->contact_work) ?></td>
                <td><?= h($lecturers->contact_other) ?></td>
                <td><?= h($lecturers->created_by) ?></td>
                <td><?= h($lecturers->created) ?></td>
                <td><?= h($lecturers->last_modified_by) ?></td>
                <td><?= h($lecturers->modified) ?></td>
                <td><?= h($lecturers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lecturers', 'action' => 'view', $lecturers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lecturers', 'action' => 'edit', $lecturers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lecturers', 'action' => 'delete', $lecturers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lecturers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Staffs') ?></h4>
        <?php if (!empty($user->staffs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('Rank') ?></th>
                <th scope="col"><?= __('Contact Mobile') ?></th>
                <th scope="col"><?= __('Contact Work') ?></th>
                <th scope="col"><?= __('Contact Other') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->staffs as $staffs): ?>
            <tr>
                <td><?= h($staffs->id) ?></td>
                <td><?= h($staffs->staff_id) ?></td>
                <td><?= h($staffs->rank) ?></td>
                <td><?= h($staffs->contact_mobile) ?></td>
                <td><?= h($staffs->contact_work) ?></td>
                <td><?= h($staffs->contact_other) ?></td>
                <td><?= h($staffs->created_by) ?></td>
                <td><?= h($staffs->created) ?></td>
                <td><?= h($staffs->last_modified_by) ?></td>
                <td><?= h($staffs->modified) ?></td>
                <td><?= h($staffs->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Staffs', 'action' => 'view', $staffs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Staffs', 'action' => 'edit', $staffs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Staffs', 'action' => 'delete', $staffs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Students') ?></h4>
        <?php if (!empty($user->students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Mode') ?></th>
                <th scope="col"><?= __('Course Code') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Igs') ?></th>
                <th scope="col"><?= __('Tie') ?></th>
                <th scope="col"><?= __('Contact Mobile') ?></th>
                <th scope="col"><?= __('Contact Work') ?></th>
                <th scope="col"><?= __('Contact Other') ?></th>
                <th scope="col"><?= __('Overall Completion') ?></th>
                <th scope="col"><?= __('Register Date') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->students as $students): ?>
            <tr>
                <td><?= h($students->id) ?></td>
                <td><?= h($students->student_id) ?></td>
                <td><?= h($students->mode) ?></td>
                <td><?= h($students->course_code) ?></td>
                <td><?= h($students->status) ?></td>
                <td><?= h($students->igs) ?></td>
                <td><?= h($students->tie) ?></td>
                <td><?= h($students->contact_mobile) ?></td>
                <td><?= h($students->contact_work) ?></td>
                <td><?= h($students->contact_other) ?></td>
                <td><?= h($students->overall_completion) ?></td>
                <td><?= h($students->register_date) ?></td>
                <td><?= h($students->created_by) ?></td>
                <td><?= h($students->created) ?></td>
                <td><?= h($students->last_modified_by) ?></td>
                <td><?= h($students->modified) ?></td>
                <td><?= h($students->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
