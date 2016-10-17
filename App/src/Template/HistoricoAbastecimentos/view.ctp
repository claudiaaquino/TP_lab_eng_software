<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Historico Abastecimento'), ['action' => 'edit', $historicoAbastecimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Historico Abastecimento'), ['action' => 'delete', $historicoAbastecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoAbastecimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Historico Abastecimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historico Abastecimento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="historicoAbastecimentos view large-9 medium-8 columns content">
    <h3><?= h($historicoAbastecimento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Veiculo') ?></th>
            <td><?= $historicoAbastecimento->has('veiculo') ? $this->Html->link($historicoAbastecimento->veiculo->id, ['controller' => 'Veiculos', 'action' => 'view', $historicoAbastecimento->veiculo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Historico Preco') ?></th>
            <td><?= $historicoAbastecimento->has('historico_preco') ? $this->Html->link($historicoAbastecimento->historico_preco->id, ['controller' => 'HistoricoPrecos', 'action' => 'view', $historicoAbastecimento->historico_preco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($historicoAbastecimento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Litros') ?></th>
            <td><?= $this->Number->format($historicoAbastecimento->litros) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Total') ?></th>
            <td><?= $this->Number->format($historicoAbastecimento->valor_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Km Atual') ?></th>
            <td><?= $this->Number->format($historicoAbastecimento->km_atual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consumo Ult Abastecimento') ?></th>
            <td><?= $this->Number->format($historicoAbastecimento->consumo_ult_abastecimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Posto') ?></th>
            <td><?= $this->Number->format($historicoAbastecimento->avaliacao_posto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($historicoAbastecimento->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Abastecimento') ?></th>
            <td><?= h($historicoAbastecimento->dt_abastecimento) ?></td>
        </tr>
    </table>
</div>
