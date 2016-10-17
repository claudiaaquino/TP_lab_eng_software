<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Posto Pagamento Forma'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pagamento Formas'), ['controller' => 'PagamentoFormas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pagamento Forma'), ['controller' => 'PagamentoFormas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postoPagamentoFormas index large-9 medium-8 columns content">
    <h3><?= __('Posto Pagamento Formas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagamento_forma_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postoPagamentoFormas as $postoPagamentoForma): ?>
            <tr>
                <td><?= $this->Number->format($postoPagamentoForma->id) ?></td>
                <td><?= $postoPagamentoForma->has('posto') ? $this->Html->link($postoPagamentoForma->posto->id, ['controller' => 'Postos', 'action' => 'view', $postoPagamentoForma->posto->id]) : '' ?></td>
                <td><?= $postoPagamentoForma->has('pagamento_forma') ? $this->Html->link($postoPagamentoForma->pagamento_forma->id, ['controller' => 'PagamentoFormas', 'action' => 'view', $postoPagamentoForma->pagamento_forma->id]) : '' ?></td>
                <td><?= h($postoPagamentoForma->dt_cadastro) ?></td>
                <td><?= $this->Number->format($postoPagamentoForma->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $postoPagamentoForma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postoPagamentoForma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postoPagamentoForma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postoPagamentoForma->id)]) ?>
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
