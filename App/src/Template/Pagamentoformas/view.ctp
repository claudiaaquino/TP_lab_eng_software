<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $pagamentoForma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pagamentoForma->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $pagamentoForma->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pagamentoFormas view large-9 medium-8 columns content">
    <h3><?= h($pagamentoForma->descricao) ?></h3>
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
</div>
