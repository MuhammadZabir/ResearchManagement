<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="staffs view large-9 medium-8 columns content">
    <h3><?= h($staff->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Staff Id') ?></th>
            <td><?= h($staff->staff_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= h($staff->rank) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Mobile') ?></th>
            <td><?= h($staff->contact_mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Work') ?></th>
            <td><?= h($staff->contact_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Other') ?></th>
            <td><?= h($staff->contact_other) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($staff->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($staff->last_modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $staff->has('user') ? $this->Html->link($staff->user->id, ['controller' => 'Users', 'action' => 'view', $staff->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($staff->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($staff->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($staff->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Staffs') ?></h4>
        <?php if (!empty($staff->staffs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('Rank') ?></th>
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
            <?php foreach ($staff->staffs as $staffs): ?>
            <tr>
                <td><?= h($staffs->id) ?></td>
                <td><?= h($staffs->staff_id) ?></td>
                <td><?= h($staffs->rank) ?></td>
                <td><?= h($staffs->contact_mobile) ?></td>
                <td><?= h($staffs->contact_work) ?></td>
                <td><?= h($staffs->contact_other) ?></td>
                <td><?= h($staffs->created_by) ?></td>
                <td><?= h($staffs->created) ?></td>
                <td><?= h($staffs->last_modified_by) ?></td>
                <td><?= h($staffs->modified) ?></td>
                <td><?= h($staffs->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Staffs', 'action' => 'view', $staffs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Staffs', 'action' => 'edit', $staffs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Staffs', 'action' => 'delete', $staffs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
