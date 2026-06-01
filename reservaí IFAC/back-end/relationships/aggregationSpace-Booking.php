<?php
    //Requisição de acesso
    require_once '../models/Booking.php';
    require_once '../models/Space.php';
    require_once '../models/User.php';
    
    //Criação do espaço
    $s1 = new Space ('1', 'Disponível', 'Sala B-111', 'Normalmente usada para fins pedagógicos');

    //Criação das reservas e associação aos usuários
    $b1 = new Booking('1', '04/05/2026', '13h30', '15h30');

    $b2 = new Booking('2', '04/05/2026', '15h50', '16h20');

    $b3 = new Booking('3', '04/05/2026', '16h20', '17h10'); 

    //Agregação das reservas no espaço
    $s1->addBookings($b1);
    $s1->addBookings($b2);
    $s1->addBookings($b3);

    //Exibição dos dados
    echo "Nome do espaço: " . $s1->getSpaceName() . "<br>";
    echo "ID do espaço: " . $s1->getSpaceId() . "<br>";
    echo "Condição do espaço: " . $s1->getSpaceCondition() .
    '<br>';
    echo "Descrição do espaço: " . $s1->getSpaceDescription() .
    '<br><br>';
    echo "Reservas do espaço: <br><br>";

    foreach ($s1->getBookings() as $b) {
        echo "ID da reserva: " . $b->getBookingId() . "<br>";
        echo "Horário de início da reserva: " . $b->getBookingStart() . "<br>";
        echo "Horário de conclusão da reserva: " . $b->getBookingEnd() . "<br>";
        echo "Data da reserva: " . $b->getBookingDate() . "<br><br>";
    }
?>