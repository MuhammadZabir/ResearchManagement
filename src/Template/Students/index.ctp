<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $students
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attachments'), ['controller' => 'Attachments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attachment'), ['controller' => 'Attachments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students index large-9 medium-8 columns content">
    <h3><?= __('Students') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('igs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_work') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_other') ?></th>
                <th scope="col"><?= $this->Paginator->sort('overall_completion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('register_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $this->Number->format($student->id) ?></td>
                <td><?= h($student->student_id) ?></td>
                <td><?= $this->Number->format($student->mode) ?></td>
                <td><?= h($student->course_code) ?></td>
                <td><?= h($student->status) ?></td>
                <td><?= h($student->igs) ?></td>
                <td><?= h($student->tie) ?></td>
                <td><?= h($student->contact_mobile) ?></td>
                <td><?= h($student->contact_work) ?></td>
                <td><?= h($student->contact_other) ?></td>
                <td><?= h($student->overall_completion) ?></td>
                <td><?= h($student->register_date) ?></td>
                <td><?= h($student->created_by) ?></td>
                <td><?= h($student->created) ?></td>
                <td><?= h($student->last_modified_by) ?></td>
                <td><?= h($student->modified) ?></td>
                <td><?= $student->has('user') ? $this->Html->link($student->user->id, ['controller' => 'Users', 'action' => 'view', $student->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
