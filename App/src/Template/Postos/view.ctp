<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar '), ['action' => 'edit', $posto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar '), ['action' => 'delete', $posto->id], ['confirm' => __('Tem certeza que deseja deletar esse registro # {0}?', $posto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Posto'), ['action' => 'add']) ?> </li>       
    </ul>
</nav>
<div class="postos view large-9 medium-8 columns content">
    <h3>Posto: <?= h($posto->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($posto->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($posto->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Cadastro') ?></th>
            <td><?= h($posto->dt_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Modificado') ?></th>
            <td><?= h($posto->dt_modificado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Historico de Preços') ?></h4>
        <?php if (!empty($posto->historicoprecos)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Fuel Id') ?></th>
                    <th scope="col"><?= __('Preco Litro') ?></th>
                    <th scope="col"><?= __('Dt Cadastro') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                </tr>
                <?php foreach ($posto->historicoprecos as $historicoPrecos): ?>
                    <tr>
                        <td><?= h($historicoPrecos->id) ?></td>
                        <td><?= h($historicoPrecos->fuel->descricao) ?></td>
                        <td><?= h($historicoPrecos->preco_litro) ?></td>
                        <td><?= h($historicoPrecos->dt_cadastro) ?></td>
                        <td><?= h($historicoPrecos->status) ?></td>                
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Combustíveis Disponíveis') ?></h4>
        <?php if (!empty($posto->postofuels)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Fuel Id') ?></th>
                    <th scope="col"><?= __('Dt Cadastro') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                </tr>
                <?php foreach ($posto->postofuels as $postoFuels): ?>
                    <tr>
                        <td><?= h($postoFuels->id) ?></td>
                        <td><?= h($postoFuels->fuel->descricao) ?></td>
                        <td><?= h($postoFuels->dt_cadastro) ?></td>
                        <td><?= h($postoFuels->status) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Formas de Pagamento Vinculadas ') ?></h4>
        <?php if (!empty($posto->postopagamentoforma)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Pagamento Forma Id') ?></th>
                    <th scope="col"><?= __('Dt Cadastro') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                </tr>
                <?php foreach ($posto->postopagamentoforma as $postoPagamentoForma): ?>
                    <tr>
                        <td><?= h($postoPagamentoForma->id) ?></td>
                        <td><?= h($postoPagamentoForma->pagamentoforma->descricao) ?></td>
                        <td><?= h($postoPagamentoForma->dt_cadastro) ?></td>
                        <td><?= h($postoPagamentoForma->status) ?></td>
                        <td class="actions">
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
