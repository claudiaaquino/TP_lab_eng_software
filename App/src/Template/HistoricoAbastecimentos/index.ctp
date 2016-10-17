<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Historico Abastecimento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historico Precos'), ['controller' => 'HistoricoPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historico Preco'), ['controller' => 'HistoricoPrecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="historicoAbastecimentos index large-9 medium-8 columns content">
    <h3><?= __('Historico Abastecimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('veiculo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('historico_preco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('litros') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('km_atual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consumo_ult_abastecimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avaliacao_posto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_abastecimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historicoAbastecimentos as $historicoAbastecimento): ?>
            <tr>
                <td><?= $this->Number->format($historicoAbastecimento->id) ?></td>
                <td><?= $historicoAbastecimento->has('veiculo') ? $this->Html->link($historicoAbastecimento->veiculo->id, ['controller' => 'Veiculos', 'action' => 'view', $historicoAbastecimento->veiculo->id]) : '' ?></td>
                <td><?= $historicoAbastecimento->has('historico_preco') ? $this->Html->link($historicoAbastecimento->historico_preco->id, ['controller' => 'HistoricoPrecos', 'action' => 'view', $historicoAbastecimento->historico_preco->id]) : '' ?></td>
                <td><?= $this->Number->format($historicoAbastecimento->litros) ?></td>
                <td><?= $this->Number->format($historicoAbastecimento->valor_total) ?></td>
                <td><?= $this->Number->format($historicoAbastecimento->km_atual) ?></td>
                <td><?= $this->Number->format($historicoAbastecimento->consumo_ult_abastecimento) ?></td>
                <td><?= $this->Number->format($historicoAbastecimento->avaliacao_posto) ?></td>
                <td><?= h($historicoAbastecimento->dt_abastecimento) ?></td>
                <td><?= $this->Number->format($historicoAbastecimento->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $historicoAbastecimento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historicoAbastecimento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historicoAbastecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoAbastecimento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
