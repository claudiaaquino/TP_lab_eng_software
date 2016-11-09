<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
         <li><?= $this->Html->link(__('Registrar Novo Abastecimento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'deletar', $historicoAbastecimento->id],
                ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $historicoAbastecimento->id)]
            )
        ?></li>
      </ul>
</nav>
<div class="historicoAbastecimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($historicoAbastecimento) ?>
    <fieldset>
        <legend><?= __('Editar Historico Abastecimento') ?></legend>
        <?php
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('historicopreco_id', ['options' => $historicoPrecos]);
            echo $this->Form->input('litros');
            echo $this->Form->input('valor_total');
            echo $this->Form->input('km_atual');
            echo $this->Form->input('consumo_ult_abastecimento');
            echo $this->Form->input('avaliacao_posto');
            echo $this->Form->input('dt_abastecimento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
