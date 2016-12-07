<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pagamentoFormas form large-9 medium-8 columns content">
    <?= $this->Form->create($pagamentoForma) ?>
    <fieldset>
        <legend><?= __('Cadastar Pagamento Forma') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
