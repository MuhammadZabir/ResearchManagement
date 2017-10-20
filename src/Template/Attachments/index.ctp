<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attachment[]|\Cake\Collection\CollectionInterface $attachments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attachment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attachments index large-9 medium-8 columns content">
    <h3><?= __('Attachments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lecturer_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attachments as $attachment): ?>
            <tr>
                <td><?= $this->Number->format($attachment->id) ?></td>
                <td><?= h($attachment->type) ?></td>
                <td><?= h($attachment->created_by) ?></td>
                <td><?= h($attachment->created) ?></td>
                <td><?= h($attachment->last_modified_by) ?></td>
                <td><?= h($attachment->modified) ?></td>
                <td><?= $attachment->has('student') ? $this->Html->link($attachment->student->id, ['controller' => 'Students', 'action' => 'view', $attachment->student->id]) : '' ?></td>
                <td><?= $attachment->has('lecturer') ? $this->Html->link($attachment->lecturer->title, ['controller' => 'Lecturers', 'action' => 'view', $attachment->lecturer->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attachment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attachment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attachment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachment->id)]) ?>
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
