<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thesis[]|\Cake\Collection\CollectionInterface $theses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drp Logs'), ['controller' => 'DrpLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drp Log'), ['controller' => 'DrpLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mock Viva Logs'), ['controller' => 'MockVivaLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mock Viva Log'), ['controller' => 'MockVivaLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Supervisors'), ['controller' => 'Supervisors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supervisor'), ['controller' => 'Supervisors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Viva Logs'), ['controller' => 'VivaLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Viva Log'), ['controller' => 'VivaLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="theses index large-9 medium-8 columns content">
    <h3><?= __('Theses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('field_of_study') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_drp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('count_drp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('count_mock_viva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_mock_viva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('count_viva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_viva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_to_submit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('submission_of_thesis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($theses as $thesis): ?>
            <tr>
                <td><?= $this->Number->format($thesis->id) ?></td>
                <td><?= h($thesis->title) ?></td>
                <td><?= h($thesis->field_of_study) ?></td>
                <td><?= h($thesis->status_drp) ?></td>
                <td><?= $this->Number->format($thesis->count_drp) ?></td>
                <td><?= $this->Number->format($thesis->count_mock_viva) ?></td>
                <td><?= h($thesis->status_mock_viva) ?></td>
                <td><?= $this->Number->format($thesis->count_viva) ?></td>
                <td><?= h($thesis->status_viva) ?></td>
                <td><?= h($thesis->status_to_submit) ?></td>
                <td><?= h($thesis->submission_of_thesis) ?></td>
                <td><?= h($thesis->created_by) ?></td>
                <td><?= h($thesis->created) ?></td>
                <td><?= h($thesis->last_modified_by) ?></td>
                <td><?= h($thesis->modified) ?></td>
                <td><?= $thesis->has('student') ? $this->Html->link($thesis->student->id, ['controller' => 'Students', 'action' => 'view', $thesis->student->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $thesis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thesis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thesis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thesis->id)]) ?>
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
