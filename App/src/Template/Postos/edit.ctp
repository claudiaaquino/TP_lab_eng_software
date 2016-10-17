<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $posto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $posto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Postos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posto Fuels'), ['controller' => 'PostoFuels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto Fuel'), ['controller' => 'PostoFuels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postos form large-9 medium-8 columns content">
    <?= $this->Form->create($posto) ?>
    <fieldset>
        <legend><?= __('Edit Posto') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
