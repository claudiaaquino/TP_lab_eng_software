<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?=
            $this->Form->postLink(
                    __('Deletar'), ['action' => 'delete', $fuel->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $fuel->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fuels form large-9 medium-8 columns content">
    <?= $this->Form->create($fuel) ?>
    <fieldset>
        <legend><?= __('Editar Combustível') ?></legend>
        <?php
        echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
