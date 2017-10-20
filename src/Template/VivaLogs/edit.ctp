<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VivaLog $vivaLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vivaLog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vivaLog->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Viva Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vivaLogs form large-9 medium-8 columns content">
    <?= $this->Form->create($vivaLog) ?>
    <fieldset>
        <legend><?= __('Edit Viva Log') ?></legend>
        <?php
            echo $this->Form->control('schedule_date');
            echo $this->Form->control('comment');
            echo $this->Form->control('result_status');
            echo $this->Form->control('correction_date', ['empty' => true]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('last_modified_by');
            echo $this->Form->control('thesis_id', ['options' => $theses, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
