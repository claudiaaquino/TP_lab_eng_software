<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar '), ['action' => 'edit', $posto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar '), ['action' => 'delete', $posto->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $posto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Posto'), ['action' => 'add']) ?> </li>       
    </ul>
</nav>
<div class="postos form large-9 medium-8 columns content">
    <?= $this->Form->create($posto) ?>
    <fieldset>
        <legend><?= __('Editar Posto') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
