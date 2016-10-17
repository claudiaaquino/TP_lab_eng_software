<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Posto Pagamento Forma'), ['action' => 'edit', $postoPagamentoForma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Posto Pagamento Forma'), ['action' => 'delete', $postoPagamentoForma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postoPagamentoForma->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posto Pagamento Formas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto Pagamento Forma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pagamento Formas'), ['controller' => 'PagamentoFormas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pagamento Forma'), ['controller' => 'PagamentoFormas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postoPagamentoFormas view large-9 medium-8 columns content">
    <h3><?= h($postoPagamentoForma->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Posto') ?></th>
            <td><?= $postoPagamentoForma->has('posto') ? $this->Html->link($postoPagamentoForma->posto->id, ['controller' => 'Postos', 'action' => 'view', $postoPagamentoForma->posto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagamento Forma') ?></th>
            <td><?= $postoPagamentoForma->has('pagamento_forma') ? $this->Html->link($postoPagamentoForma->pagamento_forma->id, ['controller' => 'PagamentoFormas', 'action' => 'view', $postoPagamentoForma->pagamento_forma->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($postoPagamentoForma->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($postoPagamentoForma->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($postoPagamentoForma->dt_cadastro) ?></td>
        </tr>
    </table>
</div>
