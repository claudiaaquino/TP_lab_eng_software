<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $postoPagamentoForma->id],
                ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $postoPagamentoForma->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Posto Pagamento Formas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pagamento Formas'), ['controller' => 'PagamentoFormas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pagamento Forma'), ['controller' => 'PagamentoFormas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postoPagamentoFormas form large-9 medium-8 columns content">
    <?= $this->Form->create($postoPagamentoForma) ?>
    <fieldset>
        <legend><?= __('Edit Posto Pagamento Forma') ?></legend>
        <?php
            echo $this->Form->input('posto_id', ['options' => $postos]);
            echo $this->Form->input('pagamentoforma_id', ['options' => $pagamentoFormas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
