<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
<!--        <li></?= $this->Html->link(__('Registrar Abastecimento'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'add', $veiculo->id]) ?> </li>
        <li></?= $this->Html->link(__('Historico de Abastecimentos'), ['controller' => 'HistoricoAbastecimentos', 'action' => 'index', $veiculo->id]) ?> </li>
        <li></?= $this->Html->link(__('Combustíveis'), ['controller' => 'VeiculoFuels', 'action' => 'index', $veiculo->id]) ?> </li>-->
        <li><?= $this->Html->link(__('Editar Veiculo'), ['action' => 'edit', $veiculo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Veiculo'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $veiculo->id)]) ?> </li>
    </ul>
</nav>
<div class="veiculos view large-2 medium-2 columns content">
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
   
</div>
