<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Posto'), ['action' => 'edit', $posto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Posto'), ['action' => 'delete', $posto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Postos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posto Fuels'), ['controller' => 'PostoFuels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto Fuel'), ['controller' => 'PostoFuels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posto Pagamento Forma'), ['controller' => 'PostoPagamentoForma', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postos view large-9 medium-8 columns content">
    <h3><?= h($posto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($posto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($posto->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($posto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($posto->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($posto->dt_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Modificado') ?></th>
            <td><?= h($posto->dt_modificado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Historico Precos') ?></h4>
        <?php if (!empty($posto->historico_precos)): ?>
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
            <?php foreach ($posto->historico_precos as $historicoPrecos): ?>
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
        <?php if (!empty($posto->posto_fuels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Posto Id') ?></th>
                <th scope="col"><?= __('Fuel Id') ?></th>
                <th scope="col"><?= __('Dt Cadastro') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($posto->posto_fuels as $postoFuels): ?>
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
        <h4><?= __('Related Posto Pagamento Forma') ?></h4>
        <?php if (!empty($posto->posto_pagamento_forma)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Posto Id') ?></th>
                <th scope="col"><?= __('Pagamento Forma Id') ?></th>
                <th scope="col"><?= __('Dt Cadastro') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($posto->posto_pagamento_forma as $postoPagamentoForma): ?>
            <tr>
                <td><?= h($postoPagamentoForma->id) ?></td>
                <td><?= h($postoPagamentoForma->posto_id) ?></td>
                <td><?= h($postoPagamentoForma->pagamento_forma_id) ?></td>
                <td><?= h($postoPagamentoForma->dt_cadastro) ?></td>
                <td><?= h($postoPagamentoForma->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PostoPagamentoForma', 'action' => 'view', $postoPagamentoForma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PostoPagamentoForma', 'action' => 'edit', $postoPagamentoForma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostoPagamentoForma', 'action' => 'delete', $postoPagamentoForma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postoPagamentoForma->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
