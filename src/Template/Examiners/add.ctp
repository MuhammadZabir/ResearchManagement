<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examiner $examiner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Examiners'), ['action' => 'index']) ?></li>
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
<div class="examiners form large-9 medium-8 columns content">
    <?= $this->Form->create($examiner) ?>
    <fieldset>
        <legend><?= __('Add Examiner') ?></legend>
        <?php
            echo $this->Form->control('created_by');
            echo $this->Form->control('last_modified_by');
            echo $this->Form->control('lecturer_id', ['options' => $lecturers, 'empty' => true]);
            echo $this->Form->control('drp_log_id', ['options' => $drpLogs, 'empty' => true]);
            echo $this->Form->control('mock_viva_log_id', ['options' => $mockVivaLogs, 'empty' => true]);
            echo $this->Form->control('viva_log_id', ['options' => $vivaLogs, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
