<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attachments'), ['controller' => 'Attachments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attachment'), ['controller' => 'Attachments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students form large-9 medium-8 columns content">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Add Student') ?></legend>
        <?php
            echo $this->Form->control('student_id');
            echo $this->Form->control('mode');
            echo $this->Form->control('course_code');
            echo $this->Form->control('status');
            echo $this->Form->control('igs');
            echo $this->Form->control('tie');
            echo $this->Form->control('contact_mobile');
            echo $this->Form->control('contact_work');
            echo $this->Form->control('contact_other');
            echo $this->Form->control('overall_completion');
            echo $this->Form->control('register_date', ['empty' => true]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('last_modified_by');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
