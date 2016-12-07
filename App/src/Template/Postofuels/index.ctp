<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Cadastrar Outro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postoFuels index large-9 medium-8 columns content">
    <h3><?= __('Combustíveis Vinculados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_id', "Combustível") ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postoFuels as $postoFuel): ?>
            <tr>
                <td><?= $this->Number->format($postoFuel->id) ?></td>
                <td><?= $postoFuel->has('posto') ? $this->Html->link($postoFuel->posto->nome, ['controller' => 'Postos', 'action' => 'view', $postoFuel->posto->id]) : '' ?></td>
                <td><?= $postoFuel->has('fuel') ? $this->Html->link($postoFuel->fuel->descricao, ['controller' => 'Fuels', 'action' => 'view', $postoFuel->fuel->id]) : '' ?></td>
                <td><?= h($postoFuel->dt_cadastro) ?></td>
                <td><?= $this->Number->format($postoFuel->status) ?></td>
                <td class="actions"><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $postoFuel->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $postoFuel->id)]) ?>
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
