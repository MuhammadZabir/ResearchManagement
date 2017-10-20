<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supervisor $supervisor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Supervisor'), ['action' => 'edit', $supervisor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supervisor'), ['action' => 'delete', $supervisor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supervisor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Supervisors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supervisor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="supervisors view large-9 medium-8 columns content">
    <h3><?= h($supervisor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($supervisor->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($supervisor->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($supervisor->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lecturer') ?></th>
            <td><?= $supervisor->has('lecturer') ? $this->Html->link($supervisor->lecturer->title, ['controller' => 'Lecturers', 'action' => 'view', $supervisor->lecturer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thesis') ?></th>
            <td><?= $supervisor->has('thesis') ? $this->Html->link($supervisor->thesis->title, ['controller' => 'Theses', 'action' => 'view', $supervisor->thesis->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($supervisor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($supervisor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($supervisor->modified) ?></td>
        </tr>
    </table>
</div>
