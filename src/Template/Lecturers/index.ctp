<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lecturer[]|\Cake\Collection\CollectionInterface $lecturers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lecturer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attachments'), ['controller' => 'Attachments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attachment'), ['controller' => 'Attachments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Supervisors'), ['controller' => 'Supervisors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supervisor'), ['controller' => 'Supervisors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lecturers index large-9 medium-8 columns content">
    <h3><?= __('Lecturers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lecturer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('internal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('field_of_study') ?></th>
                <th scope="col"><?= $this->Paginator->sort('external_university') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_work') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_other') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lecturers as $lecturer): ?>
            <tr>
                <td><?= $this->Number->format($lecturer->id) ?></td>
                <td><?= h($lecturer->lecturer_id) ?></td>
                <td><?= h($lecturer->title) ?></td>
                <td><?= h($lecturer->internal) ?></td>
                <td><?= h($lecturer->field_of_study) ?></td>
                <td><?= h($lecturer->external_university) ?></td>
                <td><?= h($lecturer->contact_mobile) ?></td>
                <td><?= h($lecturer->contact_work) ?></td>
                <td><?= h($lecturer->contact_other) ?></td>
                <td><?= h($lecturer->created_by) ?></td>
                <td><?= h($lecturer->created) ?></td>
                <td><?= h($lecturer->last_modified_by) ?></td>
                <td><?= h($lecturer->modified) ?></td>
                <td><?= $lecturer->has('user') ? $this->Html->link($lecturer->user->id, ['controller' => 'Users', 'action' => 'view', $lecturer->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lecturer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lecturer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lecturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lecturer->id)]) ?>
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
