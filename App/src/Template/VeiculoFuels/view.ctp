<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Veiculo Fuel'), ['action' => 'edit', $veiculoFuel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Veiculo Fuel'), ['action' => 'delete', $veiculoFuel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculoFuel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Veiculo Fuels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo Fuel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="veiculoFuels view large-9 medium-8 columns content">
    <h3><?= h($veiculoFuel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Veiculo') ?></th>
            <td><?= $veiculoFuel->has('veiculo') ? $this->Html->link($veiculoFuel->veiculo->id, ['controller' => 'Veiculos', 'action' => 'view', $veiculoFuel->veiculo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel') ?></th>
            <td><?= $veiculoFuel->has('fuel') ? $this->Html->link($veiculoFuel->fuel->id, ['controller' => 'Fuels', 'action' => 'view', $veiculoFuel->fuel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($veiculoFuel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($veiculoFuel->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($veiculoFuel->dt_cadastro) ?></td>
        </tr>
    </table>
</div>
