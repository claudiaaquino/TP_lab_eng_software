<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Veiculo Fuel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="veiculoFuels index large-9 medium-8 columns content">
    <h3><?= __('Veiculo Fuels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('veiculo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculoFuels as $veiculoFuel): ?>
            <tr>
                <td><?= $this->Number->format($veiculoFuel->id) ?></td>
                <td><?= $veiculoFuel->has('veiculo') ? $this->Html->link($veiculoFuel->veiculo->id, ['controller' => 'Veiculos', 'action' => 'view', $veiculoFuel->veiculo->id]) : '' ?></td>
                <td><?= $veiculoFuel->has('fuel') ? $this->Html->link($veiculoFuel->fuel->id, ['controller' => 'Fuels', 'action' => 'view', $veiculoFuel->fuel->id]) : '' ?></td>
                <td><?= h($veiculoFuel->dt_cadastro) ?></td>
                <td><?= $this->Number->format($veiculoFuel->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $veiculoFuel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $veiculoFuel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $veiculoFuel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculoFuel->id)]) ?>
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
