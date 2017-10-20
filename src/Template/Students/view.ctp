<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attachments'), ['controller' => 'Attachments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attachment'), ['controller' => 'Attachments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student Id') ?></th>
            <td><?= h($student->student_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Code') ?></th>
            <td><?= h($student->course_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($student->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Igs') ?></th>
            <td><?= h($student->igs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tie') ?></th>
            <td><?= h($student->tie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Mobile') ?></th>
            <td><?= h($student->contact_mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Work') ?></th>
            <td><?= h($student->contact_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Other') ?></th>
            <td><?= h($student->contact_other) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Overall Completion') ?></th>
            <td><?= h($student->overall_completion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($student->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($student->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $student->has('user') ? $this->Html->link($student->user->id, ['controller' => 'Users', 'action' => 'view', $student->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mode') ?></th>
            <td><?= $this->Number->format($student->mode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Register Date') ?></th>
            <td><?= h($student->register_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($student->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($student->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Students') ?></h4>
        <?php if (!empty($student->students)): ?>
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
            <?php foreach ($student->students as $students): ?>
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
    <div class="related">
        <h4><?= __('Related Attachments') ?></h4>
        <?php if (!empty($student->attachments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Lecturer Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->attachments as $attachments): ?>
            <tr>
                <td><?= h($attachments->id) ?></td>
                <td><?= h($attachments->name) ?></td>
                <td><?= h($attachments->type) ?></td>
                <td><?= h($attachments->created_by) ?></td>
                <td><?= h($attachments->created) ?></td>
                <td><?= h($attachments->last_modified_by) ?></td>
                <td><?= h($attachments->modified) ?></td>
                <td><?= h($attachments->student_id) ?></td>
                <td><?= h($attachments->lecturer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attachments', 'action' => 'view', $attachments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attachments', 'action' => 'edit', $attachments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attachments', 'action' => 'delete', $attachments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Theses') ?></h4>
        <?php if (!empty($student->theses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Field Of Study') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Status Drp') ?></th>
                <th scope="col"><?= __('Count Drp') ?></th>
                <th scope="col"><?= __('Status Mock Viva') ?></th>
                <th scope="col"><?= __('Count Viva') ?></th>
                <th scope="col"><?= __('Status Viva') ?></th>
                <th scope="col"><?= __('Status To Submit') ?></th>
                <th scope="col"><?= __('Submission Of Thesis') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->theses as $theses): ?>
            <tr>
                <td><?= h($theses->id) ?></td>
                <td><?= h($theses->title) ?></td>
                <td><?= h($theses->field_of_study) ?></td>
                <td><?= h($theses->description) ?></td>
                <td><?= h($theses->status_drp) ?></td>
                <td><?= h($theses->count_drp) ?></td>
                <td><?= h($theses->status_mock_viva) ?></td>
                <td><?= h($theses->count_viva) ?></td>
                <td><?= h($theses->status_viva) ?></td>
                <td><?= h($theses->status_to_submit) ?></td>
                <td><?= h($theses->submission_of_thesis) ?></td>
                <td><?= h($theses->created_by) ?></td>
                <td><?= h($theses->created) ?></td>
                <td><?= h($theses->last_modified_by) ?></td>
                <td><?= h($theses->modified) ?></td>
                <td><?= h($theses->student_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Theses', 'action' => 'view', $theses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Theses', 'action' => 'edit', $theses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Theses', 'action' => 'delete', $theses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $theses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
