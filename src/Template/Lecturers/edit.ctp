<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lecturer $lecturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lecturer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lecturer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lecturers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attachments'), ['controller' => 'Attachments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attachment'), ['controller' => 'Attachments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Supervisors'), ['controller' => 'Supervisors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supervisor'), ['controller' => 'Supervisors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lecturers form large-9 medium-8 columns content">
    <?= $this->Form->create($lecturer) ?>
    <fieldset>
        <legend><?= __('Edit Lecturer') ?></legend>
        <?php
            echo $this->Form->control('lecturer_id');
            echo $this->Form->control('title');
            echo $this->Form->control('internal');
            echo $this->Form->control('field_of_study');
            echo $this->Form->control('external_university');
            echo $this->Form->control('contact_mobile');
            echo $this->Form->control('contact_work');
            echo $this->Form->control('contact_other');
            echo $this->Form->control('created_by');
            echo $this->Form->control('last_modified_by');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
