<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examiner[]|\Cake\Collection\CollectionInterface $examiners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Examiner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drp Logs'), ['controller' => 'DrpLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drp Log'), ['controller' => 'DrpLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mock Viva Logs'), ['controller' => 'MockVivaLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mock Viva Log'), ['controller' => 'MockVivaLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Viva Logs'), ['controller' => 'VivaLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Viva Log'), ['controller' => 'VivaLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examiners index large-9 medium-8 columns content">
    <h3><?= __('Examiners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lecturer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drp_log_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mock_viva_log_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('viva_log_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($examiners as $examiner): ?>
            <tr>
                <td><?= $this->Number->format($examiner->id) ?></td>
                <td><?= h($examiner->created_by) ?></td>
                <td><?= h($examiner->created) ?></td>
                <td><?= h($examiner->last_modified_by) ?></td>
                <td><?= h($examiner->modified) ?></td>
                <td><?= $examiner->has('lecturer') ? $this->Html->link($examiner->lecturer->title, ['controller' => 'Lecturers', 'action' => 'view', $examiner->lecturer->id]) : '' ?></td>
                <td><?= $examiner->has('drp_log') ? $this->Html->link($examiner->drp_log->id, ['controller' => 'DrpLogs', 'action' => 'view', $examiner->drp_log->id]) : '' ?></td>
                <td><?= $examiner->has('mock_viva_log') ? $this->Html->link($examiner->mock_viva_log->id, ['controller' => 'MockVivaLogs', 'action' => 'view', $examiner->mock_viva_log->id]) : '' ?></td>
                <td><?= $examiner->has('viva_log') ? $this->Html->link($examiner->viva_log->id, ['controller' => 'VivaLogs', 'action' => 'view', $examiner->viva_log->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $examiner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $examiner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $examiner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examiner->id)]) ?>
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
