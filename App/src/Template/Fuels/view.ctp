<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $fuel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $fuel->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $fuel->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fuels view large-9 medium-8 columns content">
    <h3><?= h($fuel->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fuel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($fuel->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($fuel->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($fuel->dt_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Modificado') ?></th>
            <td><?= h($fuel->dt_modificado) ?></td>
        </tr>
    </table>
    
    <div class="related">
        <h4><?= __('Posto Que possuem esse Combustível') ?></h4>
        <?php if (!empty($fuel->postofuels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Posto Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
            </tr>
            <?php foreach ($fuel->postofuels as $postoFuels): ?>
            <tr>
                <td><?= h($postoFuels->id) ?></td>
                <td><?= h($postoFuels->posto->nome) ?></td>
                <td><?= h($postoFuels->status) ?></td>
                <td class="actions">
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
