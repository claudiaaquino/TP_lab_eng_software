<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Cadastrar Preço Atualizado'), ['action' => 'add']) ?> </li>
          </ul>
</nav>
<div class="historicoPrecos index large-9 medium-8 columns content">
    <h3><?= __('Historico Precos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco_litro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historicoPrecos as $historicoPreco): ?>
            <tr>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $historicoPreco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historicoPreco->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $historicoPreco->id)]) ?>
                </td>
                <td><?= h($historicoPreco->dt_cadastro) ?></td>
                <td><?= $historicoPreco->has('posto') ? $this->Html->link($historicoPreco->posto->nome, ['controller' => 'Postos', 'action' => 'view', $historicoPreco->posto->id]) : '' ?></td>
                <td><?= $historicoPreco->has('fuel') ? $this->Html->link($historicoPreco->fuel->descricao, ['controller' => 'Fuels', 'action' => 'view', $historicoPreco->fuel->id]) : '' ?></td>
                <td><?= $this->Number->format($historicoPreco->preco_litro) ?></td>
                <td><?= $this->Number->format($historicoPreco->status) ?></td>
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
