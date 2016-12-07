<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
       <li><?= $this->Html->link(__('Ver Formas Vnculadas'), ['action' => 'index']) ?> </li>        
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
            <th scope="row"><?= __('Forma de Pagamento') ?></th>
            <td><?= $postoPagamentoForma->has('pagamentoforma') ? $this->Html->link($postoPagamentoForma->pagamentoforma->id, ['controller' => 'PagamentoFormas', 'action' => 'view', $postoPagamentoForma->pagamentoforma->id]) : '' ?></td>
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
