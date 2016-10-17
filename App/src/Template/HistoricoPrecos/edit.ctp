<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $historicoPreco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $historicoPreco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="historicoPrecos form large-9 medium-8 columns content">
    <?= $this->Form->create($historicoPreco) ?>
    <fieldset>
        <legend><?= __('Edit Historico Preco') ?></legend>
        <?php
            echo $this->Form->input('posto_id', ['options' => $postos]);
            echo $this->Form->input('fuel_id', ['options' => $fuels]);
            echo $this->Form->input('preco_litro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
