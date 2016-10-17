<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Cadastrar Outro Veiculo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Registrar Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Historico de Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index']) ?> </li>
        </ul>
</nav>
<div class="veiculos index large-9 medium-8 columns content">
    <h3><?= __('Veiculos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('modelo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('placa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculos as $veiculo): ?>
                <tr>
                   <td><?= $veiculo->modelo->descricao; ?></td>
                    <td><?= $this->Number->format($veiculo->ano) ?></td>
                    <td><?= h($veiculo->placa) ?></td>
                    <td><?= h($veiculo->dt_cadastro) ?></td>
                   <td class="actions">
                        <?= $this->Html->link(__('Selecionar'), ['action' => 'view', $veiculo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $veiculo->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id)]) ?>
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
