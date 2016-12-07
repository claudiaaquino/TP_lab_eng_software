<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?= $this->Html->link(__('Víncular Outro Combustível'), ['action' => 'add'/*,$veiculo_id*/]) ?>
    </ul>
</nav>
<div class="veiculoFuels index large-9 medium-8 columns content">
    <h3><?= __('Combustíveis Vínculados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('veiculo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_id', "Combustível") ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculoFuels as $veiculoFuel): ?>
                <tr>
                    <td><?= $veiculoFuel->has('veiculo') ? $this->Html->link($veiculoFuel->veiculo->placa, ['controller' => 'Veiculos', 'action' => 'view', $veiculoFuel->veiculo->id]) : '' ?></td>
                    <td><?= $veiculoFuel->fuel->descricao; ?></td>
                    <td class="actions">
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $veiculoFuel->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $veiculoFuel->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
