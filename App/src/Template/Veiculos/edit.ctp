<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Form->postLink(__('Deletar Veiculo'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $veiculo->id)]) ?> </li>
<!--        <li></?= $this->Html->link(__('Registrar Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add', $veiculo->id]) ?> </li>
        <li></?= $this->Html->link(__('Historico de Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index', $veiculo->id]) ?> </li>
        <li></?= $this->Html->link(__('Combustíveis'), ['controller' => 'VeiculoFuels', 'action' => 'index', $veiculo->id]) ?> </li>-->
    </ul>
</nav>
<div class="veiculos form large-9 medium-8 columns content">
    <?= $this->Form->create($veiculo) ?>
    <fieldset>
        <legend><?= __('Editar Veiculo') ?></legend>
        <?php
            echo $this->Form->input('modelo_id', ['options' => $modelos]);
            echo $this->Form->input('ano');
            echo $this->Form->input('placa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
