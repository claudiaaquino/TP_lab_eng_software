<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $veiculo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modelos'), ['controller' => 'Modelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo'), ['controller' => 'Modelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Veiculo Fuels'), ['controller' => 'VeiculoFuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo Fuel'), ['controller' => 'VeiculoFuels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="veiculos form large-9 medium-8 columns content">
    <?= $this->Form->create($veiculo) ?>
    <fieldset>
        <legend><?= __('Edit Veiculo') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('modelo_id', ['options' => $modelos]);
            echo $this->Form->input('ano');
            echo $this->Form->input('placa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
