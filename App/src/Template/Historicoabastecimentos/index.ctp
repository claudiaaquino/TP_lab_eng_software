<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!--<li>-->
        <?php if ($tipousuario == 2) { ?>
            <?= $this->Html->link(__('Registrar Abastecimento'), ['controller' => 'Historicoabastecimentos', 'action' => 'add'/* , $veiculo->id */]) ?> 
            <!--</li>-->
        <?php } ?>
    </ul>
</nav>
<div class="historicoAbastecimentos index large-9 medium-8 columns content">
    <h3><?= __('Historico de Abastecimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('dt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('veiculo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco_litro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('litros') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_total') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historicoAbastecimentos as $historicoAbastecimento): ?>
                <tr>
                    <td><?= h($historicoAbastecimento->dt_abastecimento) ?></td>
                    <td><?= $historicoAbastecimento->veiculo->placa ?></td>
                    <td><?= $historicoAbastecimento->historicopreco->preco_litro ?></td>
                    <td><?= $this->Number->format($historicoAbastecimento->litros) ?></td>
                    <td><?= $this->Number->format($historicoAbastecimento->valor_total) ?></td>
                    <?php if ($tipousuario == 2) { ?>
                        <td class="actions">
                            <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $historicoAbastecimento->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $historicoAbastecimento->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $historicoAbastecimento->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $historicoAbastecimento->id)]) ?>
                        </td>
                    <?php } ?>
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
