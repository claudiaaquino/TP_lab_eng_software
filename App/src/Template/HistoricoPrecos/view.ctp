<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Historico Preco'), ['action' => 'edit', $historicoPreco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Historico Preco'), ['action' => 'delete', $historicoPreco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoPreco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Postos'), ['controller' => 'Postos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto'), ['controller' => 'Postos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fuels'), ['controller' => 'Fuels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel'), ['controller' => 'Fuels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Historico Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historico Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="historicoPrecos view large-9 medium-8 columns content">
    <h3><?= h($historicoPreco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Posto') ?></th>
            <td><?= $historicoPreco->has('posto') ? $this->Html->link($historicoPreco->posto->id, ['controller' => 'Postos', 'action' => 'view', $historicoPreco->posto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel') ?></th>
            <td><?= $historicoPreco->has('fuel') ? $this->Html->link($historicoPreco->fuel->id, ['controller' => 'Fuels', 'action' => 'view', $historicoPreco->fuel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($historicoPreco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Litro') ?></th>
            <td><?= $this->Number->format($historicoPreco->preco_litro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($historicoPreco->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($historicoPreco->dt_cadastro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Historico Abastecimentos') ?></h4>
        <?php if (!empty($historicoPreco->historico_abastecimentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Veiculo Id') ?></th>
                <th scope="col"><?= __('Historico Preco Id') ?></th>
                <th scope="col"><?= __('Litros') ?></th>
                <th scope="col"><?= __('Valor Total') ?></th>
                <th scope="col"><?= __('Km Atual') ?></th>
                <th scope="col"><?= __('Consumo Ult Abastecimento') ?></th>
                <th scope="col"><?= __('Avaliacao Posto') ?></th>
                <th scope="col"><?= __('Dt Abastecimento') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($historicoPreco->historico_abastecimentos as $historicoAbastecimentos): ?>
            <tr>
                <td><?= h($historicoAbastecimentos->id) ?></td>
                <td><?= h($historicoAbastecimentos->veiculo_id) ?></td>
                <td><?= h($historicoAbastecimentos->historico_preco_id) ?></td>
                <td><?= h($historicoAbastecimentos->litros) ?></td>
                <td><?= h($historicoAbastecimentos->valor_total) ?></td>
                <td><?= h($historicoAbastecimentos->km_atual) ?></td>
                <td><?= h($historicoAbastecimentos->consumo_ult_abastecimento) ?></td>
                <td><?= h($historicoAbastecimentos->avaliacao_posto) ?></td>
                <td><?= h($historicoAbastecimentos->dt_abastecimento) ?></td>
                <td><?= h($historicoAbastecimentos->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'view', $historicoAbastecimentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'edit', $historicoAbastecimentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'delete', $historicoAbastecimentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoAbastecimentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
