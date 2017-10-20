<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrpLog[]|\Cake\Collection\CollectionInterface $drpLogs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Drp Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drpLogs index large-9 medium-8 columns content">
    <h3><?= __('Drp Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('result_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thesis_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drpLogs as $drpLog): ?>
            <tr>
                <td><?= $this->Number->format($drpLog->id) ?></td>
                <td><?= h($drpLog->schedule_date) ?></td>
                <td><?= h($drpLog->result_status) ?></td>
                <td><?= h($drpLog->created_by) ?></td>
                <td><?= h($drpLog->created) ?></td>
                <td><?= h($drpLog->last_modified_by) ?></td>
                <td><?= h($drpLog->modified) ?></td>
                <td><?= $drpLog->has('thesis') ? $this->Html->link($drpLog->thesis->title, ['controller' => 'Theses', 'action' => 'view', $drpLog->thesis->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $drpLog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $drpLog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $drpLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drpLog->id)]) ?>
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
