<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pagamentoFormas index large-9 medium-8 columns content">
    <h3><?= __('Pagamento Formas') ?></h3>
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
            <?php foreach ($pagamentoFormas as $pagamentoForma): ?>
            <tr>
                <td><?= $this->Number->format($pagamentoForma->id) ?></td>
                <td><?= h($pagamentoForma->descricao) ?></td>
                <td><?= h($pagamentoForma->dt_cadastro) ?></td>
                <td><?= h($pagamentoForma->dt_modificado) ?></td>
                <td><?= $this->Number->format($pagamentoForma->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pagamentoForma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pagamentoForma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pagamentoForma->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $pagamentoForma->id)]) ?>
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
