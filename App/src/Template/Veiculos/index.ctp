<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modelos'), ['controller' => 'Modelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo'), ['controller' => 'Modelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Veiculo Fuels'), ['controller' => 'VeiculoFuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo Fuel'), ['controller' => 'VeiculoFuels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="veiculos index large-9 medium-8 columns content">
    <h3><?= __('Veiculos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('placa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculos as $veiculo): ?>
            <tr>
                <td><?= $this->Number->format($veiculo->id) ?></td>
                <td><?= $veiculo->has('user') ? $this->Html->link($veiculo->user->id, ['controller' => 'Users', 'action' => 'view', $veiculo->user->id]) : '' ?></td>
                <td><?= $veiculo->has('modelo') ? $this->Html->link($veiculo->modelo->id, ['controller' => 'Modelos', 'action' => 'view', $veiculo->modelo->id]) : '' ?></td>
                <td><?= $this->Number->format($veiculo->ano) ?></td>
                <td><?= h($veiculo->placa) ?></td>
                <td><?= h($veiculo->dt_cadastro) ?></td>
                <td><?= h($veiculo->dt_modificado) ?></td>
                <td><?= $this->Number->format($veiculo->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $veiculo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $veiculo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id)]) ?>
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
