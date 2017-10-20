<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supervisor[]|\Cake\Collection\CollectionInterface $supervisors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Supervisor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="supervisors index large-9 medium-8 columns content">
    <h3><?= __('Supervisors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lecturer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thesis_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supervisors as $supervisor): ?>
            <tr>
                <td><?= $this->Number->format($supervisor->id) ?></td>
                <td><?= h($supervisor->type) ?></td>
                <td><?= h($supervisor->created_by) ?></td>
                <td><?= h($supervisor->created) ?></td>
                <td><?= h($supervisor->last_modified_by) ?></td>
                <td><?= h($supervisor->modified) ?></td>
                <td><?= $supervisor->has('lecturer') ? $this->Html->link($supervisor->lecturer->title, ['controller' => 'Lecturers', 'action' => 'view', $supervisor->lecturer->id]) : '' ?></td>
                <td><?= $supervisor->has('thesis') ? $this->Html->link($supervisor->thesis->title, ['controller' => 'Theses', 'action' => 'view', $supervisor->thesis->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $supervisor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supervisor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supervisor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supervisor->id)]) ?>
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
