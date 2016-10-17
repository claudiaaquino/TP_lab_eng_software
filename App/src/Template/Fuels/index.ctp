<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fuel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posto Fuels'), ['controller' => 'PostoFuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto Fuel'), ['controller' => 'PostoFuels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Veiculo Fuels'), ['controller' => 'VeiculoFuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo Fuel'), ['controller' => 'VeiculoFuels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fuels index large-9 medium-8 columns content">
    <h3><?= __('Fuels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fuels as $fuel): ?>
            <tr>
                <td><?= $this->Number->format($fuel->id) ?></td>
                <td><?= h($fuel->descricao) ?></td>
                <td><?= h($fuel->dt_cadastro) ?></td>
                <td><?= h($fuel->dt_modificado) ?></td>
                <td><?= $this->Number->format($fuel->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fuel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fuel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fuel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuel->id)]) ?>
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
