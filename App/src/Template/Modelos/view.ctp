<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $modelo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $modelo->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $modelo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modelos view large-9 medium-8 columns content">
    <h3><?= h($modelo->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($modelo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($modelo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($modelo->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($modelo->dt_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Modificado') ?></th>
            <td><?= h($modelo->dt_modificado) ?></td>
        </tr>
    </table>    
</div>
