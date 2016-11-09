<div class="historicoAbastecimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($historicoAbastecimento) ?>
    <fieldset>
        <legend><?= __('Registrar Novo Abastecimento') ?></legend>
        <?php
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('posto_id', ['options' => $postos]);
            echo $this->Form->input('fuel_id', ['options' => $fuels]);
            echo $this->Form->input('litros');
            echo $this->Form->input('km_atual');
            echo $this->Form->input('dt_abastecimento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
