<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li><li><?= $this->Html->link(__('Historico de Precos'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="historicoPrecos form large-9 medium-8 columns content">
    <?= $this->Form->create($historicoPreco) ?>
    <fieldset>
        <legend><?= __('Cadastro de Preço Atualizado') ?></legend>
        <?php
        echo $this->Form->input('posto_id', ['options' => $postos]);
        echo $this->Form->input('fuel_id', ['options' => $fuels, "label" => "Combustível"]);
        echo $this->Form->input('preco_litro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
