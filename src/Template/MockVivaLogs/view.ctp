<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MockVivaLog $mockVivaLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mock Viva Log'), ['action' => 'edit', $mockVivaLog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mock Viva Log'), ['action' => 'delete', $mockVivaLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mockVivaLog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mock Viva Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mock Viva Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mockVivaLogs view large-9 medium-8 columns content">
    <h3><?= h($mockVivaLog->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Result Status') ?></th>
            <td><?= h($mockVivaLog->result_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($mockVivaLog->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($mockVivaLog->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thesis') ?></th>
            <td><?= $mockVivaLog->has('thesis') ? $this->Html->link($mockVivaLog->thesis->title, ['controller' => 'Theses', 'action' => 'view', $mockVivaLog->thesis->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mockVivaLog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule Date') ?></th>
            <td><?= h($mockVivaLog->schedule_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mockVivaLog->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mockVivaLog->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($mockVivaLog->comment)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Examiners') ?></h4>
        <?php if (!empty($mockVivaLog->examiners)): ?>
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
            <?php foreach ($mockVivaLog->examiners as $examiners): ?>
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
</div>
