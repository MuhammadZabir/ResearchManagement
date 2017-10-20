<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lecturer $lecturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lecturer'), ['action' => 'edit', $lecturer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lecturer'), ['action' => 'delete', $lecturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lecturer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lecturers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lecturer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lecturers'), ['controller' => 'Lecturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lecturer'), ['controller' => 'Lecturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attachments'), ['controller' => 'Attachments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attachment'), ['controller' => 'Attachments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Supervisors'), ['controller' => 'Supervisors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supervisor'), ['controller' => 'Supervisors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lecturers view large-9 medium-8 columns content">
    <h3><?= h($lecturer->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lecturer Id') ?></th>
            <td><?= h($lecturer->lecturer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($lecturer->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Internal') ?></th>
            <td><?= h($lecturer->internal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Field Of Study') ?></th>
            <td><?= h($lecturer->field_of_study) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('External University') ?></th>
            <td><?= h($lecturer->external_university) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Mobile') ?></th>
            <td><?= h($lecturer->contact_mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Work') ?></th>
            <td><?= h($lecturer->contact_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Other') ?></th>
            <td><?= h($lecturer->contact_other) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($lecturer->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($lecturer->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $lecturer->has('user') ? $this->Html->link($lecturer->user->id, ['controller' => 'Users', 'action' => 'view', $lecturer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lecturer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lecturer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lecturer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lecturers') ?></h4>
        <?php if (!empty($lecturer->lecturers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lecturer Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Internal') ?></th>
                <th scope="col"><?= __('Field Of Study') ?></th>
                <th scope="col"><?= __('External University') ?></th>
                <th scope="col"><?= __('Contact Mobile') ?></th>
                <th scope="col"><?= __('Contact Work') ?></th>
                <th scope="col"><?= __('Contact Other') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lecturer->lecturers as $lecturers): ?>
            <tr>
                <td><?= h($lecturers->id) ?></td>
                <td><?= h($lecturers->lecturer_id) ?></td>
                <td><?= h($lecturers->title) ?></td>
                <td><?= h($lecturers->internal) ?></td>
                <td><?= h($lecturers->field_of_study) ?></td>
                <td><?= h($lecturers->external_university) ?></td>
                <td><?= h($lecturers->contact_mobile) ?></td>
                <td><?= h($lecturers->contact_work) ?></td>
                <td><?= h($lecturers->contact_other) ?></td>
                <td><?= h($lecturers->created_by) ?></td>
                <td><?= h($lecturers->created) ?></td>
                <td><?= h($lecturers->last_modified_by) ?></td>
                <td><?= h($lecturers->modified) ?></td>
                <td><?= h($lecturers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lecturers', 'action' => 'view', $lecturers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lecturers', 'action' => 'edit', $lecturers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lecturers', 'action' => 'delete', $lecturers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lecturers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Attachments') ?></h4>
        <?php if (!empty($lecturer->attachments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Lecturer Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lecturer->attachments as $attachments): ?>
            <tr>
                <td><?= h($attachments->id) ?></td>
                <td><?= h($attachments->name) ?></td>
                <td><?= h($attachments->type) ?></td>
                <td><?= h($attachments->created_by) ?></td>
                <td><?= h($attachments->created) ?></td>
                <td><?= h($attachments->last_modified_by) ?></td>
                <td><?= h($attachments->modified) ?></td>
                <td><?= h($attachments->student_id) ?></td>
                <td><?= h($attachments->lecturer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attachments', 'action' => 'view', $attachments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attachments', 'action' => 'edit', $attachments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attachments', 'action' => 'delete', $attachments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Examiners') ?></h4>
        <?php if (!empty($lecturer->examiners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Lecturer Id') ?></th>
                <th scope="col"><?= __('Drp Log Id') ?></th>
                <th scope="col"><?= __('Mock Viva Log Id') ?></th>
                <th scope="col"><?= __('Viva Log Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lecturer->examiners as $examiners): ?>
            <tr>
                <td><?= h($examiners->id) ?></td>
                <td><?= h($examiners->created_by) ?></td>
                <td><?= h($examiners->created) ?></td>
                <td><?= h($examiners->last_modified_by) ?></td>
                <td><?= h($examiners->modified) ?></td>
                <td><?= h($examiners->lecturer_id) ?></td>
                <td><?= h($examiners->drp_log_id) ?></td>
                <td><?= h($examiners->mock_viva_log_id) ?></td>
                <td><?= h($examiners->viva_log_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Examiners', 'action' => 'view', $examiners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Examiners', 'action' => 'edit', $examiners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Examiners', 'action' => 'delete', $examiners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examiners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Supervisors') ?></h4>
        <?php if (!empty($lecturer->supervisors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Lecturer Id') ?></th>
                <th scope="col"><?= __('Thesis Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lecturer->supervisors as $supervisors): ?>
            <tr>
                <td><?= h($supervisors->id) ?></td>
                <td><?= h($supervisors->type) ?></td>
                <td><?= h($supervisors->created_by) ?></td>
                <td><?= h($supervisors->created) ?></td>
                <td><?= h($supervisors->last_modified_by) ?></td>
                <td><?= h($supervisors->modified) ?></td>
                <td><?= h($supervisors->lecturer_id) ?></td>
                <td><?= h($supervisors->thesis_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Supervisors', 'action' => 'view', $supervisors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Supervisors', 'action' => 'edit', $supervisors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Supervisors', 'action' => 'delete', $supervisors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supervisors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
