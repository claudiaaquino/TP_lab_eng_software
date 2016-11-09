<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar '), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="postos form large-9 medium-8 columns content">
    <?= $this->Form->create($posto) ?>
    <fieldset>
        <legend><?= __('Cadastrar Novo Posto') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
