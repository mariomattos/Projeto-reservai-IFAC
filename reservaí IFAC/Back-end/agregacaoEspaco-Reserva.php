<?php
    //Requisição de acesso
    require_once 'Classes/Reserva.php';
    require_once 'Classes/Espaco.php';

    //Criação do objeto
    $e1 = new Espaco (1, "Disponível");

    //Agregação das reservas no espaço
    $e1->addReservas($r1 = new Reserva (1, "13:30", "04/05/2026"));
    $e1->addReservas($r1 = new Reserva (2, "15:30", "05/05/2026"));
    $e1->addReservas($r1 = new Reserva (3, "16:20", "06/05/2026"));

    //Exibição dos dados
    echo "ID do espaço: " . $e1->getIdEspaco() . "<br>";
    echo "Condição do espaço: " . $e1->getCondicao() .
    '<br><br>';
    echo "Reservas do espaço: <br><br>";
    foreach ($e1->getReservas() as $r) {
        echo "ID da reserva: " . $r->getIdReserva() . "<br>";
        echo "Horário da reserva: " . $r->getHorarioReserva() . "<br>";
        echo "Data da reserva: " . $r->getDataReserva() . "<br><br>";   
    }
?>