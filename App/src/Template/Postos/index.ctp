<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
       <li><?= $this->Html->link(__('Novo Posto'), ['action' => 'add']) ?> </li>       
    </ul>
</nav>
<div class="postos index large-9 medium-8 columns content">
    <h3><?= __('Postos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postos as $posto): ?>
                <tr>
                    <td><?= $this->Number->format($posto->id) ?></td>
                    <td><?= h($posto->nome) ?></td>
                    <td><?= h($posto->endereco) ?></td>
                    <td><?= h($posto->dt_cadastro) ?></td>
                    <td><?= h($posto->dt_modificado) ?></td>
                    <td><?= $this->Number->format($posto->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $posto->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $posto->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $posto->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $posto->id)]) ?>
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
