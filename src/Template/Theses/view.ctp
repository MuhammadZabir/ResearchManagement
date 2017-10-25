<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thesis $thesis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Thesis'), ['action' => 'edit', $thesis->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Thesis'), ['action' => 'delete', $thesis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thesis->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Theses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thesis'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drp Logs'), ['controller' => 'DrpLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drp Log'), ['controller' => 'DrpLogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mock Viva Logs'), ['controller' => 'MockVivaLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mock Viva Log'), ['controller' => 'MockVivaLogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Supervisors'), ['controller' => 'Supervisors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supervisor'), ['controller' => 'Supervisors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Viva Logs'), ['controller' => 'VivaLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Viva Log'), ['controller' => 'VivaLogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="theses view large-9 medium-8 columns content">
    <h3><?= h($thesis->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($thesis->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Field Of Study') ?></th>
            <td><?= h($thesis->field_of_study) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Drp') ?></th>
            <td><?= h($thesis->status_drp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Mock Viva') ?></th>
            <td><?= h($thesis->status_mock_viva) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Viva') ?></th>
            <td><?= h($thesis->status_viva) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status To Submit') ?></th>
            <td><?= h($thesis->status_to_submit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($thesis->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($thesis->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $thesis->has('student') ? $this->Html->link($thesis->student->id, ['controller' => 'Students', 'action' => 'view', $thesis->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($thesis->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Count Drp') ?></th>
            <td><?= $this->Number->format($thesis->count_drp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Count Mock Viva') ?></th>
            <td><?= $this->Number->format($thesis->count_mock_viva) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Count Viva') ?></th>
            <td><?= $this->Number->format($thesis->count_viva) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Submission Of Thesis') ?></th>
            <td><?= h($thesis->submission_of_thesis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($thesis->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($thesis->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($thesis->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Drp Logs') ?></h4>
        <?php if (!empty($thesis->drp_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Schedule Date') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Result Status') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Thesis Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($thesis->drp_logs as $drpLogs): ?>
            <tr>
                <td><?= h($drpLogs->id) ?></td>
                <td><?= h($drpLogs->schedule_date) ?></td>
                <td><?= h($drpLogs->comment) ?></td>
                <td><?= h($drpLogs->result_status) ?></td>
                <td><?= h($drpLogs->created_by) ?></td>
                <td><?= h($drpLogs->created) ?></td>
                <td><?= h($drpLogs->last_modified_by) ?></td>
                <td><?= h($drpLogs->modified) ?></td>
                <td><?= h($drpLogs->thesis_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DrpLogs', 'action' => 'view', $drpLogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DrpLogs', 'action' => 'edit', $drpLogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DrpLogs', 'action' => 'delete', $drpLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drpLogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Mock Viva Logs') ?></h4>
        <?php if (!empty($thesis->mock_viva_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Schedule Date') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Result Status') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Thesis Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($thesis->mock_viva_logs as $mockVivaLogs): ?>
            <tr>
                <td><?= h($mockVivaLogs->id) ?></td>
                <td><?= h($mockVivaLogs->schedule_date) ?></td>
                <td><?= h($mockVivaLogs->comment) ?></td>
                <td><?= h($mockVivaLogs->result_status) ?></td>
                <td><?= h($mockVivaLogs->created_by) ?></td>
                <td><?= h($mockVivaLogs->created) ?></td>
                <td><?= h($mockVivaLogs->last_modified_by) ?></td>
                <td><?= h($mockVivaLogs->modified) ?></td>
                <td><?= h($mockVivaLogs->thesis_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MockVivaLogs', 'action' => 'view', $mockVivaLogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MockVivaLogs', 'action' => 'edit', $mockVivaLogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MockVivaLogs', 'action' => 'delete', $mockVivaLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mockVivaLogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Supervisors') ?></h4>
        <?php if (!empty($thesis->supervisors)): ?>
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
            <?php foreach ($thesis->supervisors as $supervisors): ?>
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
    <div class="related">
        <h4><?= __('Related Viva Logs') ?></h4>
        <?php if (!empty($thesis->viva_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Schedule Date') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Result Status') ?></th>
                <th scope="col"><?= __('Correction Date') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Last Modified By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Thesis Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($thesis->viva_logs as $vivaLogs): ?>
            <tr>
                <td><?= h($vivaLogs->id) ?></td>
                <td><?= h($vivaLogs->schedule_date) ?></td>
                <td><?= h($vivaLogs->comment) ?></td>
                <td><?= h($vivaLogs->result_status) ?></td>
                <td><?= h($vivaLogs->correction_date) ?></td>
                <td><?= h($vivaLogs->created_by) ?></td>
                <td><?= h($vivaLogs->created) ?></td>
                <td><?= h($vivaLogs->last_modified_by) ?></td>
                <td><?= h($vivaLogs->modified) ?></td>
                <td><?= h($vivaLogs->thesis_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VivaLogs', 'action' => 'view', $vivaLogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VivaLogs', 'action' => 'edit', $vivaLogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VivaLogs', 'action' => 'delete', $vivaLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vivaLogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
