<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(__('Deletar Registro'), ['action' => 'delete', $historicoPreco->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $historicoPreco->id)]) ?> </li>
        <li><?= $this->Html->link(__('Historico Precos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Preco'), ['action' => 'add']) ?> </li>
          </ul>
</nav>
<div class="historicoPrecos view large-9 medium-8 columns content">
    <h3>Data do Preço: <?= h($historicoPreco->dt_cadastro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Posto') ?></th>
            <td><?= $historicoPreco->has('posto') ? $this->Html->link($historicoPreco->posto->nome, ['controller' => 'Postos', 'action' => 'view', $historicoPreco->posto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Combustível') ?></th>
            <td><?= $historicoPreco->has('fuel') ? $this->Html->link($historicoPreco->fuel->descricao, ['controller' => 'Fuels', 'action' => 'view', $historicoPreco->fuel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Litro') ?></th>
            <td><?= $this->Number->format($historicoPreco->preco_litro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($historicoPreco->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($historicoPreco->dt_cadastro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Historico Abastecimentos') ?></h4>
        <?php if (!empty($historicoPreco->historicoabastecimentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Dt Abastecimento') ?></th>
                <th scope="col"><?= __('Placa Veículos') ?></th>
                <th scope="col"><?= __('Litros') ?></th>
                <th scope="col"><?= __('Valor Total') ?></th>
                <th scope="col"><?= __('Avaliacao Posto') ?></th>
            </tr>
            <?php foreach ($historicoPreco->historicoabastecimentos as $historicoAbastecimentos): ?>
            <tr>
                <td><?= h($historicoAbastecimentos->dt_abastecimento) ?></td>
                <td><?= h($historicoAbastecimentos->veiculo->placa) ?></td>
                <td><?= h($historicoAbastecimentos->litros) ?></td>
                <td><?= h($historicoAbastecimentos->valor_total) ?></td>
                <td><?= h($historicoAbastecimentos->avaliacao_posto) ?></td>    
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
