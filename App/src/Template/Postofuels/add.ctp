<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Ver todos Vinculados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="postoFuels form large-9 medium-8 columns content">
    <?= $this->Form->create($postoFuel) ?>
    <fieldset>
        <legend><?= __('Vincular Combustivel') ?></legend>
        <?php
            echo $this->Form->input('posto_id', ['options' => $postos]);
            echo $this->Form->input('fuel_id', ['options' => $fuels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
