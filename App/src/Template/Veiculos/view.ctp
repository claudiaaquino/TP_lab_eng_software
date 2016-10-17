<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Veiculo'), ['action' => 'edit', $veiculo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Veiculo'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Meus Veiculos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Registrar Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Historico de Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Vincular Combustível'), ['controller' => 'VeiculoFuels', 'action' => 'index', $veiculo->id]) ?> </li>
    </ul>
</nav>
<div class="veiculos view large-9 medium-8 columns content">
    <h3><?= h($veiculo->id) ?></h3>
    <table class="vertical-table">        
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= $veiculo->modelo->descricao;?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Placa') ?></th>
            <td><?= h($veiculo->placa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ano') ?></th>
            <td><?= $this->Number->format($veiculo->ano) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($veiculo->dt_cadastro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Historico de Abastecimentos') ?></h4>
        <?php if (!empty($veiculo->historico_abastecimentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Dt Abastecimento') ?></th>
                <th scope="col"><?= __('Litros') ?></th>
                <th scope="col"><?= __('Valor Total') ?></th>
                <th scope="col"><?= __('Km Atual') ?></th>
                <th scope="col"><?= __('Consumo Ult Abastecimento') ?></th>
                <th scope="col"><?= __('Avaliacao Posto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($veiculo->historico_abastecimentos as $historicoAbastecimentos): ?>
            <tr>
                <td><?= h($historicoAbastecimentos->dt_abastecimento) ?></td>
                <td><?= h($historicoAbastecimentos->litros) ?></td>
                <td><?= h($historicoAbastecimentos->valor_total) ?></td>
                <td><?= h($historicoAbastecimentos->km_atual) ?></td>
                <td><?= h($historicoAbastecimentos->consumo_ult_abastecimento) ?></td>
                <td><?= h($historicoAbastecimentos->avaliacao_posto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'view', $historicoAbastecimentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'edit', $historicoAbastecimentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'delete', $historicoAbastecimentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoAbastecimentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Combustíveis') ?></h4>
        <?php if (!empty($veiculo->veiculo_fuels)): ?>
        <table cellpadding="0" cellspacing="0">            
            <?php foreach ($veiculo->veiculo_fuels as $veiculoFuels): ?>
            <tr>
                <td class="actions">
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VeiculoFuels', 'action' => 'delete', $veiculoFuels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculoFuels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Combustíveis') ?></h4>
        <?php if (!empty($combustiveis)): ?>
        <table cellpadding="0" cellspacing="0">            
            <?php foreach ($combustiveis as $combustivel): ?>
            <tr>
                <td><?= print_r(h($combustivel->descricao)); ?></td>
                <td><?= print_r(h($combustivel)); ?></td>
               
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
