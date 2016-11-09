<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nova Forma Pagamento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postoPagamentoFormas index large-9 medium-8 columns content">
    <h3><?= __('Posto Pagamento Formas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagamentoforma_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postoPagamentoFormas as $postoPagamentoForma): ?>
            <tr>
                <td><?= $this->Number->format($postoPagamentoForma->id) ?></td>
                <td><?= $postoPagamentoForma->has('posto') ? $this->Html->link($postoPagamentoForma->posto->nome, ['controller' => 'Postos', 'action' => 'view', $postoPagamentoForma->posto->id]) : '' ?></td>
                <td><?= $postoPagamentoForma->has('pagamentoforma') ? $this->Html->link($postoPagamentoForma->pagamentoforma->descricao, ['controller' => 'PagamentoFormas', 'action' => 'view', $postoPagamentoForma->pagamentoforma->id]) : '' ?></td>
                <td><?= h($postoPagamentoForma->dt_cadastro) ?></td>
                <td><?= $this->Number->format($postoPagamentoForma->status) ?></td>
                <td class="actions"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postoPagamentoForma->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $postoPagamentoForma->id)]) ?>
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
