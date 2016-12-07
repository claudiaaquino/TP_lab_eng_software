<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(__('Deletar Registro'), ['action' => 'delete', $historicoPreco->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $historicoPreco->id)]) ?> </li>
        <li><?= $this->Html->link(__('Historico de Preços'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cadastrar Preço Atualizado'), ['action' => 'add']) ?> </li>
          </ul>
</nav>
<div class="historicoPrecos form large-9 medium-8 columns content">
    <?= $this->Form->create($historicoPreco) ?>
    <fieldset>
        <legend><?= __('Editar Historico de Preco') ?></legend>
        <?php
            echo $this->Form->input('posto_id', ['options' => $postos]);
            echo $this->Form->input('fuel_id', ['options' => $fuels, 'label'=>"Combustível"]);
            echo $this->Form->input('preco_litro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
