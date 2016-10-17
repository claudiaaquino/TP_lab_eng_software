<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="historicoPrecos index large-9 medium-8 columns content">
    <h3><?= __('Historico Precos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco_litro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historicoPrecos as $historicoPreco): ?>
            <tr>
                <td><?= $this->Number->format($historicoPreco->id) ?></td>
                <td><?= $historicoPreco->has('posto') ? $this->Html->link($historicoPreco->posto->id, ['controller' => 'Postos', 'action' => 'view', $historicoPreco->posto->id]) : '' ?></td>
                <td><?= $historicoPreco->has('fuel') ? $this->Html->link($historicoPreco->fuel->id, ['controller' => 'Fuels', 'action' => 'view', $historicoPreco->fuel->id]) : '' ?></td>
                <td><?= $this->Number->format($historicoPreco->preco_litro) ?></td>
                <td><?= h($historicoPreco->dt_cadastro) ?></td>
                <td><?= $this->Number->format($historicoPreco->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $historicoPreco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historicoPreco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historicoPreco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoPreco->id)]) ?>
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
