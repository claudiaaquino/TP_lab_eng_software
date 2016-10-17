<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagamentoForma->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagamentoForma->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pagamento Formas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pagamentoFormas form large-9 medium-8 columns content">
    <?= $this->Form->create($pagamentoForma) ?>
    <fieldset>
        <legend><?= __('Edit Pagamento Forma') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
