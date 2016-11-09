<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $pagamentoForma->id],
                ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $pagamentoForma->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pagamentoFormas form large-9 medium-8 columns content">
    <?= $this->Form->create($pagamentoForma) ?>
    <fieldset>
        <legend><?= __('Editar Pagamento Forma') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
