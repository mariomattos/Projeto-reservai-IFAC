<?php
    //Requisição de acesso
    require_once 'Classes/Reserva.php';
    require_once 'Classes/Espaco.php';
    require_once 'Classes/Usuario.php';
    require_once 'Classes/Caracteristicas.php';
    
    //Criação do espaço
    $e1 = new Espaco ('1', 'Disponível');
    $e1->addCaracteristicas('Sala de Aula', '', '');
    $caracteristicasEspaco = $e1->getCaracteristicas();

    //Criação dos usuários
    $u1 = new Usuario('', '', '', '', '');
    $u1->addCaracteristicas('Breno Carrilo Silveira', '', '');

    $u2 = new Usuario('', '', '', '', '');
    $u2->addCaracteristicas('Maria do Socorro Aragão', '', '');

    $u3 = new Usuario('', '', '', '', '');
    $u3->addCaracteristicas('Moézio Rodrigues', '', '');

    //Criação das reservas e associação aos usuários
    $r1 = new Reserva('1', '13:30', '04/05/2026');
    $r1->setUsuario($u1);

    $r2 = new Reserva('2', '15:30', '04/05/2026');
    $r2->setUsuario($u2);

    $r3 = new Reserva('3', '16:20', '04/05/2026');
    $r3->setUsuario($u3);

    //Agregação das reservas no espaço
    $e1->addReservas($r1);
    $e1->addReservas($r2);
    $e1->addReservas($r3);

    //Exibição dos dados
    echo "Nome do espaço: " . $caracteristicasEspaco[0]->getNome() . "<br>";
    echo "ID do espaço: " . $e1->getIdEspaco() . "<br>";
    echo "Condição do espaço: " . $e1->getCondicao() .
    '<br><br>';
    echo "Reservas do espaço: <br><br>";

    foreach ($e1->getReservas() as $r) {
        //Acessando o usuário e suas características a partir da reserva
        $usuario = $r->getUsuario();
        $caracteristicasUsuario = $usuario->getCaracteristicas();
        echo "ID da reserva: " . $r->getIdReserva() . "<br>";
        echo "Horário da reserva: " . $r->getHorarioReserva() . "<br>";
        echo "Data da reserva: " . $r->getDataReserva() . "<br>";
        echo "Usuário: " . $caracteristicasUsuario[0]->getNome() . "<br><br>";
    }
?>