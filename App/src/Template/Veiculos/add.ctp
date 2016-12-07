<div class="veiculos form large-9 medium-8 columns content">
    <?= $this->Form->create($veiculo) ?>
    <fieldset>
        <legend><?= __('Cadastrar Novo Veiculo') ?></legend>
        <?php
        echo $this->Form->input('modelo_id', ['options' => $modelos]);
        echo $this->Form->input('ano');
        echo $this->Form->input('placa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
