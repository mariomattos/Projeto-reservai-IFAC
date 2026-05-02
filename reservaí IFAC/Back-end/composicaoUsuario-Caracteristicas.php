<?php
    //Requisiçao de Acesso
    require_once 'Classes/Caracteristicas.php';
    require_once 'Classes/Usuario.php';
    require_once 'Classes/Professor.php';

    //Criaçao do Objeto
    $p1 = new Professor ('20251CRB45810510000', '123.456.789-00', '12/07/1981', 'breno.silveira@ifac.edu.br', '****', 'Programação para Web');
    $p1->addCaracteristicas('Breno Carrillo Silveira', '', '');

    foreach ($p1->getCaracteristicas() as $c) {
        print 'Dados do usuário: <br><br> Nome: ' . $c->getNome() . '<br>';
    }

    echo 'Disciplina(s): ' . $p1->getDisciplina() . '<br>';
    echo 'Matrícula: ' . $p1->getMatricula() . '<br>';
    echo 'CPF: ' . $p1->getCpfUsuario() . '<br>';
    echo 'Nascimento: ' . $p1->getDataNascimentoUsuario() . '<br>';
    echo 'E-mail: ' . $p1->getEmailUsuario() . '<br>';
?>