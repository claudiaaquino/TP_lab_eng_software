<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1><a href=""><?= $this->fetch('title') ?></a></h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">

                    <?php if ($loggedIn) { ?>
                        <?php if ($tipousuario == 2) { ?>
                            <!--<li></?= $this->Html->link(__('Novo Veiculo'), ['action' => 'add']) ?></li>-->
                            <li><?= $this->Html->link('Meus Veículos', ['controller' => 'veiculos', 'action' => 'index']) ?></li>
                            <!--<li></?= $this->Html->link(__('Registrar Abastecimento'), ['controller' => 'Historicoabastecimentos', 'action' => 'add'/*, $veiculo->id*/]) ?> </li>-->
                            <li><?= $this->Html->link(__('Abastecimentos'), ['controller' => 'Historicoabastecimentos', 'action' => 'index'/* , $veiculo->id */]) ?> </li>
                            <li><?= $this->Html->link(__('Combustíveis'), ['controller' => 'Veiculofuels', 'action' => 'index'/* , $veiculo->id */]) ?> </li>
                            <li><?= $this->Html->link('Minha conta', ['controller' => 'users', 'action' => 'edit']) ?></li>
                        <?php } ?>

                        <li><?= $this->Html->link('Sair', ['controller' => 'users', 'action' => 'logout']) ?></li>
                    <?php } else { ?>
                        <!--<li><?//= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']) ?></li>-->
                        <li><?= $this->Html->link('Cadastrar', ['controller' => 'users', 'action' => 'add']) ?></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?php if ($loggedIn && $tipousuario != 2) { ?>
                <nav class="large-2 medium-4 columns" id="actions-sidebar">
                    <ul class="side-nav">
                        <?php if ($tipousuario == 1) {//ADMIN ?>
                            <li><?= $this->Html->link(__('Modelos'), ['controller' => 'Modelos', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Combustíveis'), ['controller' => 'Fuels', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Formas de Pagamento'), ['controller' => 'Pagamentoformas', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Postos'), ['controller' => 'Postos', 'action' => 'index']) ?></li>

                        <?php } else if ($tipousuario == 3) {//POSTO ?>
                            <li><?= $this->Html->link(__('Minha rede de Postos'), ['controller' => 'Postos', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Histórico de Preço'), ['controller' => 'Historicoprecos', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Histórico de Abastecimentos'), ['controller' => 'Historicoabastecimentos', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Combustíveis'), ['controller' => 'Postofuels', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link(__('Formas de Pagamento'), ['controller' => 'Postopagamentoformas', 'action' => 'index']) ?></li>
                        <?php } ?>
                    </ul>
                </nav>
            <?php } ?>
            <?= $this->fetch('content') ?>
        </div>
        <footer>
        </footer>
    </body>
</html>
