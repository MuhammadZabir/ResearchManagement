<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VivaLog $vivaLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Viva Log'), ['action' => 'edit', $vivaLog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Viva Log'), ['action' => 'delete', $vivaLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vivaLog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Viva Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Viva Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Theses'), ['controller' => 'Theses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thesis'), ['controller' => 'Theses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Examiners'), ['controller' => 'Examiners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Examiner'), ['controller' => 'Examiners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vivaLogs view large-9 medium-8 columns content">
    <h3><?= h($vivaLog->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Result Status') ?></th>
            <td><?= h($vivaLog->result_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($vivaLog->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($vivaLog->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thesis') ?></th>
            <td><?= $vivaLog->has('thesis') ? $this->Html->link($vivaLog->thesis->title, ['controller' => 'Theses', 'action' => 'view', $vivaLog->thesis->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vivaLog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule Date') ?></th>
            <td><?= h($vivaLog->schedule_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correction Date') ?></th>
            <td><?= h($vivaLog->correction_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vivaLog->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vivaLog->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($vivaLog->comment)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Examiners') ?></h4>
        <?php if (!empty($vivaLog->examiners)): ?>
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
            <?php foreach ($vivaLog->examiners as $examiners): ?>
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
