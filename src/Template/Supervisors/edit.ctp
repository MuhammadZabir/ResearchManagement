<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supervisor $supervisor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supervisor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supervisor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Supervisors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="supervisors form large-9 medium-8 columns content">
    <?= $this->Form->create($supervisor) ?>
    <fieldset>
        <legend><?= __('Edit Supervisor') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('created_by');
            echo $this->Form->control('last_modified_by');
            echo $this->Form->control('lecturer_id', ['options' => $lecturers, 'empty' => true]);
            echo $this->Form->control('thesis_id', ['options' => $theses, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
