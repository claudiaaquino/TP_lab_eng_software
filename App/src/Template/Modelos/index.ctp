<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelos index large-9 medium-8 columns content">
    <h3><?= __('Modelos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modelos as $modelo): ?>
            <tr>
                <td><?= $this->Number->format($modelo->id) ?></td>
                <td><?= h($modelo->descricao) ?></td>
                <td><?= h($modelo->dt_cadastro) ?></td>
                <td><?= h($modelo->dt_modificado) ?></td>
                <td><?= $this->Number->format($modelo->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $modelo->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $modelo->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $modelo->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $modelo->id)]) ?>
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
