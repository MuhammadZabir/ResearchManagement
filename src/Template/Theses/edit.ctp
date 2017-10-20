<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thesis $thesis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thesis->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thesis->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['action' => 'index']) ?></li>
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
<div class="theses form large-9 medium-8 columns content">
    <?= $this->Form->create($thesis) ?>
    <fieldset>
        <legend><?= __('Edit Thesis') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('field_of_study');
            echo $this->Form->control('description');
            echo $this->Form->control('status_drp');
            echo $this->Form->control('count_drp');
            echo $this->Form->control('status_mock_viva');
            echo $this->Form->control('count_viva');
            echo $this->Form->control('status_viva');
            echo $this->Form->control('status_to_submit');
            echo $this->Form->control('submission_of_thesis', ['empty' => true]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('last_modified_by');
            echo $this->Form->control('student_id', ['options' => $students, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
