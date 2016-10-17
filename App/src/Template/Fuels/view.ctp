<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fuel'), ['action' => 'edit', $fuel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fuel'), ['action' => 'delete', $fuel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fuels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posto Fuels'), ['controller' => 'PostoFuels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto Fuel'), ['controller' => 'PostoFuels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Veiculo Fuels'), ['controller' => 'VeiculoFuels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo Fuel'), ['controller' => 'VeiculoFuels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fuels view large-9 medium-8 columns content">
    <h3><?= h($fuel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($fuel->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fuel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($fuel->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($fuel->dt_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Modificado') ?></th>
            <td><?= h($fuel->dt_modificado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Historico Precos') ?></h4>
        <?php if (!empty($fuel->historico_precos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Posto Id') ?></th>
                <th scope="col"><?= __('Fuel Id') ?></th>
                <th scope="col"><?= __('Preco Litro') ?></th>
                <th scope="col"><?= __('Dt Cadastro') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fuel->historico_precos as $historicoPrecos): ?>
            <tr>
                <td><?= h($historicoPrecos->id) ?></td>
                <td><?= h($historicoPrecos->posto_id) ?></td>
                <td><?= h($historicoPrecos->fuel_id) ?></td>
                <td><?= h($historicoPrecos->preco_litro) ?></td>
                <td><?= h($historicoPrecos->dt_cadastro) ?></td>
                <td><?= h($historicoPrecos->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HistoricoPrecos', 'action' => 'view', $historicoPrecos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HistoricoPrecos', 'action' => 'edit', $historicoPrecos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HistoricoPrecos', 'action' => 'delete', $historicoPrecos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoPrecos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Posto Fuels') ?></h4>
        <?php if (!empty($fuel->posto_fuels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Posto Id') ?></th>
                <th scope="col"><?= __('Fuel Id') ?></th>
                <th scope="col"><?= __('Dt Cadastro') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fuel->posto_fuels as $postoFuels): ?>
            <tr>
                <td><?= h($postoFuels->id) ?></td>
                <td><?= h($postoFuels->posto_id) ?></td>
                <td><?= h($postoFuels->fuel_id) ?></td>
                <td><?= h($postoFuels->dt_cadastro) ?></td>
                <td><?= h($postoFuels->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PostoFuels', 'action' => 'view', $postoFuels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PostoFuels', 'action' => 'edit', $postoFuels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostoFuels', 'action' => 'delete', $postoFuels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postoFuels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Veiculo Fuels') ?></h4>
        <?php if (!empty($fuel->veiculo_fuels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Veiculo Id') ?></th>
                <th scope="col"><?= __('Fuel Id') ?></th>
                <th scope="col"><?= __('Dt Cadastro') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fuel->veiculo_fuels as $veiculoFuels): ?>
            <tr>
                <td><?= h($veiculoFuels->id) ?></td>
                <td><?= h($veiculoFuels->veiculo_id) ?></td>
                <td><?= h($veiculoFuels->fuel_id) ?></td>
                <td><?= h($veiculoFuels->dt_cadastro) ?></td>
                <td><?= h($veiculoFuels->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VeiculoFuels', 'action' => 'view', $veiculoFuels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VeiculoFuels', 'action' => 'edit', $veiculoFuels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VeiculoFuels', 'action' => 'delete', $veiculoFuels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculoFuels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
