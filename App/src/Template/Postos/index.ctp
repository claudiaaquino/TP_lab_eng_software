<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Posto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posto Fuels'), ['controller' => 'PostoFuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto Fuel'), ['controller' => 'PostoFuels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postos index large-9 medium-8 columns content">
    <h3><?= __('Postos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postos as $posto): ?>
            <tr>
                <td><?= $this->Number->format($posto->id) ?></td>
                <td><?= h($posto->nome) ?></td>
                <td><?= h($posto->endereco) ?></td>
                <td><?= h($posto->dt_cadastro) ?></td>
                <td><?= h($posto->dt_modificado) ?></td>
                <td><?= $this->Number->format($posto->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $posto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $posto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $posto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posto->id)]) ?>
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
