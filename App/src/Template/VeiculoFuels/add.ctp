<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Veiculo Fuels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="veiculoFuels form large-9 medium-8 columns content">
    <?= $this->Form->create($veiculoFuel) ?>
    <fieldset>
        <legend><?= __('Add Veiculo Fuel') ?></legend>
        <?php
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('fuel_id', ['options' => $fuels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
