<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VivaLog[]|\Cake\Collection\CollectionInterface $vivaLogs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Viva Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vivaLogs index large-9 medium-8 columns content">
    <h3><?= __('Viva Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('result_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correction_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thesis_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vivaLogs as $vivaLog): ?>
            <tr>
                <td><?= $this->Number->format($vivaLog->id) ?></td>
                <td><?= h($vivaLog->schedule_date) ?></td>
                <td><?= h($vivaLog->result_status) ?></td>
                <td><?= h($vivaLog->correction_date) ?></td>
                <td><?= h($vivaLog->created_by) ?></td>
                <td><?= h($vivaLog->created) ?></td>
                <td><?= h($vivaLog->last_modified_by) ?></td>
                <td><?= h($vivaLog->modified) ?></td>
                <td><?= $vivaLog->has('thesis') ? $this->Html->link($vivaLog->thesis->title, ['controller' => 'Theses', 'action' => 'view', $vivaLog->thesis->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vivaLog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vivaLog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vivaLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vivaLog->id)]) ?>
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
