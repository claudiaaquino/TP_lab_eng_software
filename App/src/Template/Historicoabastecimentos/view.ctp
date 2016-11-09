<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Registrar Novo Abastecimento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $historicoAbastecimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $historicoAbastecimento->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $historicoAbastecimento->id)]) ?> </li>
    </ul>
</nav>
<div class="historicoAbastecimentos view large-9 medium-8 columns content">

    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Veiculo') ?></th>
            <td><?= $historicoAbastecimento->has('veiculo') ? $this->Html->link($historicoAbastecimento->veiculo->placa, ['controller' => 'Veiculos', 'action' => 'view', $historicoAbastecimento->veiculo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Historico Preco') ?></th>
            <td><?= $historicoAbastecimento->historicopreco->preco_litro ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Posto') ?></th>
            <td><?= $historicoAbastecimento->historicopreco->posto->nome ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Combustível') ?></th>
            <td><?= $historicoAbastecimento->historicopreco->fuel->descricao ?></td>
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
