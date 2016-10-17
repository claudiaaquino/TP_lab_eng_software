<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Posto Fuel'), ['action' => 'edit', $postoFuel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Posto Fuel'), ['action' => 'delete', $postoFuel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postoFuel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posto Fuels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto Fuel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postoFuels view large-9 medium-8 columns content">
    <h3><?= h($postoFuel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Posto') ?></th>
            <td><?= $postoFuel->has('posto') ? $this->Html->link($postoFuel->posto->id, ['controller' => 'Postos', 'action' => 'view', $postoFuel->posto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel') ?></th>
            <td><?= $postoFuel->has('fuel') ? $this->Html->link($postoFuel->fuel->id, ['controller' => 'Fuels', 'action' => 'view', $postoFuel->fuel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($postoFuel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($postoFuel->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($postoFuel->dt_cadastro) ?></td>
        </tr>
    </table>
</div>
