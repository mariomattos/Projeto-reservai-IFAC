<?php
    //Requisiçao de Acesso
    require_once 'Classes/Caracteristicas.php';
    require_once 'Classes/Usuario.php';

    //Criaçao do Objeto
    $u1 = new Usuario ('20251CRB45810510052', '02065107219', '21/09/2009');
    //Composiçao
    $u1->addCaracteristicas('1', 'Matheus', '1', '1303');

    foreach ($u1->getCaracteristicas() as $c) {
        print 'Caracteristicas do usuario: <br> Nome:' . $c->getNome() . '<br> Quantidade:' . $c->getQuantidade() . '<br>';
    }

    echo 'Matrícula: ' . $u1->getMatriculaUsuario() . '<br>';
    echo 'CPF: ' . $u1->getCpfUsuario() . '<br>';
    echo 'Nascimento: ' . $u1->getDataNascimentoUsuario() . '<br>';
?>