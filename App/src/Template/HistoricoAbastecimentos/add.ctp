<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Historico Abastecimentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="historicoAbastecimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($historicoAbastecimento) ?>
    <fieldset>
        <legend><?= __('Add Historico Abastecimento') ?></legend>
        <?php
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('historico_preco_id', ['options' => $historicoPrecos]);
            echo $this->Form->input('litros');
            echo $this->Form->input('km_atual');
            echo $this->Form->input('dt_abastecimento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
