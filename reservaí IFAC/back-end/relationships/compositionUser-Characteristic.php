<?php
    //Requisiçao de Acesso
    require_once '../models/Characteristic.php';
    require_once '../models/User.php';
    require_once '../models/Teacher.php';

    //Criaçao do Objeto
    $t1 = new Teacher ('1317949', '123.456.789-00', '12/07/1981', 'breno.silveira@ifac.edu.br', '****', 'Programação para Web');
    $t1->addCharacteristics('Breno Carrillo Silveira', '', '');

    foreach ($t1->getCharacteristics() as $c) {
        print 'Dados do usuário: <br><br> Nome: ' . $c->getName() . '<br>';
    }

    echo 'Disciplina(s): ' . $t1->getSubject() . '<br>';
    echo 'Matrícula: ' . $t1->getRegistrationId() . '<br>';
    echo 'CPF: ' . $t1->getUserCpf() . '<br>';
    echo 'Nascimento: ' . $t1->getUserBirthDate() . '<br>';
    echo 'E-mail: ' . $t1->getUserEmail() . '<br>';
?>