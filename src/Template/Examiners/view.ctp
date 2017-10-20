<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examiner $examiner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Examiner'), ['action' => 'edit', $examiner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Examiner'), ['action' => 'delete', $examiner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examiner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Examiners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Examiner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drp Logs'), ['controller' => 'DrpLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drp Log'), ['controller' => 'DrpLogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mock Viva Logs'), ['controller' => 'MockVivaLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mock Viva Log'), ['controller' => 'MockVivaLogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Viva Logs'), ['controller' => 'VivaLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Viva Log'), ['controller' => 'VivaLogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="examiners view large-9 medium-8 columns content">
    <h3><?= h($examiner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($examiner->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($examiner->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lecturer') ?></th>
            <td><?= $examiner->has('lecturer') ? $this->Html->link($examiner->lecturer->title, ['controller' => 'Lecturers', 'action' => 'view', $examiner->lecturer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drp Log') ?></th>
            <td><?= $examiner->has('drp_log') ? $this->Html->link($examiner->drp_log->id, ['controller' => 'DrpLogs', 'action' => 'view', $examiner->drp_log->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mock Viva Log') ?></th>
            <td><?= $examiner->has('mock_viva_log') ? $this->Html->link($examiner->mock_viva_log->id, ['controller' => 'MockVivaLogs', 'action' => 'view', $examiner->mock_viva_log->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Viva Log') ?></th>
            <td><?= $examiner->has('viva_log') ? $this->Html->link($examiner->viva_log->id, ['controller' => 'VivaLogs', 'action' => 'view', $examiner->viva_log->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($examiner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($examiner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($examiner->modified) ?></td>
        </tr>
    </table>
</div>
