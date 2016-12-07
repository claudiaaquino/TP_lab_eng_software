<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!--<li>-->
        <?= $this->Html->link(__('Combustíveis Vínculados'), ['action' => 'index'/* , $veiculo_id */]) ?>
        <!--</li>-->
    </ul>
</nav>
<div class="veiculoFuels form large-9 medium-8 columns content">
    <?= $this->Form->create($veiculoFuel) ?>
    <fieldset>
        <legend><?= __('Vincular Outro Combustível') ?></legend>
        <?php
        echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
        echo $this->Form->input('fuel_id', ['options' => $fuels, "label" => "Combustível"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
