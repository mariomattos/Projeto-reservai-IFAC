<?php
    //Requisição de acesso
    require_once '../models/Booking.php';
    require_once '../models/Space.php';
    require_once '../models/User.php';
    
    //Criação do espaço
    $s1 = new Space ('1', 'Disponível', 'Sala B-111', '');

    //Criação dos usuários
    $u1 = new User('', '', '', '', '', 'Breno Carrillo Silveira');
    $u2 = new User('', '', '', '', '', 'Maria do Socorro Aragão');
    $u3 = new User('', '', '', '', '', 'Moézio Rodrigues');

    //Criação das reservas e associação aos usuários
    $b1 = new Booking('1', '04/05/2026', '13:30', '15:30');
    $b1->setUser($u1);

    $b2 = new Booking('2', '04/05/2026', '15:50', '16:20');
    $b2->setUser($u2);

    $b3 = new Booking('3', '04/05/2026', '16:20', '17:10');
    $b3->setUser($u3); 

    //Agregação das reservas no espaço
    $s1->addBookings($b1);
    $s1->addBookings($b2);
    $s1->addBookings($b3);

    //Exibição dos dados
    echo "Nome do espaço: " . $s1->getSpaceName() . "<br>";
    echo "ID do espaço: " . $s1->getSpaceId() . "<br>";
    echo "Condição do espaço: " . $s1->getSpaceCondition() .
    '<br><br>';
    echo "Reservas do espaço: <br><br>";

    foreach ($s1->getBookings() as $b) {
        echo "ID da reserva: " . $b->getBookingId() . "<br>";
        echo "Horário de início da reserva: " . $b->getBookingStart() . "<br>";
        echo "Horário de conclusão da reserva: " . $b->getBookingEnd() . "<br>";
        echo "Data da reserva: " . $b->getBookingDate() . "<br>";
        echo "Usuário: " . $b->getUser()->getUserName() . "<br><br>";
    }
?>