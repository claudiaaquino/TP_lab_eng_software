<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Ver Formas Vinculadas'), ['action' => 'index']) ?> </li>      
    </ul>
</nav>
<div class="postoPagamentoFormas form large-9 medium-8 columns content">
    <?= $this->Form->create($postoPagamentoForma) ?>
    <fieldset>
        <legend><?= __('Vincular Nova Forma de Pagamento ') ?></legend>
        <?php
            echo $this->Form->input('posto_id', ['options' => $postos]);
            echo $this->Form->input('pagamentoforma_id', ['options' => $pagamentoFormas, "label"=>"Forma de Pagamento"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
