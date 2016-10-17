<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pagamento Forma'), ['action' => 'edit', $pagamentoForma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pagamento Forma'), ['action' => 'delete', $pagamentoForma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagamentoForma->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pagamento Formas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pagamento Forma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pagamentoFormas view large-9 medium-8 columns content">
    <h3><?= h($pagamentoForma->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($pagamentoForma->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pagamentoForma->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($pagamentoForma->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($pagamentoForma->dt_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Modificado') ?></th>
            <td><?= h($pagamentoForma->dt_modificado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Posto Pagamento Forma') ?></h4>
        <?php if (!empty($pagamentoForma->posto_pagamento_forma)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Posto Id') ?></th>
                <th scope="col"><?= __('Pagamento Forma Id') ?></th>
                <th scope="col"><?= __('Dt Cadastro') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pagamentoForma->posto_pagamento_forma as $postoPagamentoForma): ?>
            <tr>
                <td><?= h($postoPagamentoForma->id) ?></td>
                <td><?= h($postoPagamentoForma->posto_id) ?></td>
                <td><?= h($postoPagamentoForma->pagamento_forma_id) ?></td>
                <td><?= h($postoPagamentoForma->dt_cadastro) ?></td>
                <td><?= h($postoPagamentoForma->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PostoPagamentoForma', 'action' => 'view', $postoPagamentoForma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PostoPagamentoForma', 'action' => 'edit', $postoPagamentoForma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostoPagamentoForma', 'action' => 'delete', $postoPagamentoForma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postoPagamentoForma->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
