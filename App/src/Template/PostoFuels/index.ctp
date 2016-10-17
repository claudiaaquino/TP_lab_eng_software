<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Posto Fuel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postoFuels index large-9 medium-8 columns content">
    <h3><?= __('Posto Fuels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postoFuels as $postoFuel): ?>
            <tr>
                <td><?= $this->Number->format($postoFuel->id) ?></td>
                <td><?= $postoFuel->has('posto') ? $this->Html->link($postoFuel->posto->id, ['controller' => 'Postos', 'action' => 'view', $postoFuel->posto->id]) : '' ?></td>
                <td><?= $postoFuel->has('fuel') ? $this->Html->link($postoFuel->fuel->id, ['controller' => 'Fuels', 'action' => 'view', $postoFuel->fuel->id]) : '' ?></td>
                <td><?= h($postoFuel->dt_cadastro) ?></td>
                <td><?= $this->Number->format($postoFuel->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $postoFuel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postoFuel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postoFuel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postoFuel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
