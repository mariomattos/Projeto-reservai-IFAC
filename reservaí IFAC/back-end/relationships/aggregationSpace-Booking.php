<?php
    //Requisição de acesso
    require_once '../models/Booking.php';
    require_once '../models/Space.php';
    require_once '../models/User.php';
    require_once '../models/Characteristic.php';
    
    //Criação do espaço
    $s1 = new Space ('1', 'Disponível');
    $s1->addCharacteristics('Sala de Aula', '', '');
    $characteristicsSpace = $s1->getCharacteristics();

    //Criação dos usuários
    $u1 = new User('', '', '', '', '');
    $u1->addCharacteristics('Breno Carrilo Silveira', '', '');

    $u2 = new User('', '', '', '', '');
    $u2->addCharacteristics('Maria do Socorro Aragão', '', '');

    $u3 = new User('', '', '', '', '');
    $u3->addCharacteristics('Moézio Rodrigues', '', '');

    //Criação das reservas e associação aos usuários
    $b1 = new Booking('1', '13:30', '04/05/2026');
    $b1->setUser($u1);

    $b2 = new Booking('2', '15:30', '04/05/2026');
    $b2->setUser($u2);

    $b3 = new Booking('3', '16:20', '04/05/2026');
    $b3->setUser($u3); 

    //Agregação das reservas no espaço
    $s1->addBookings($b1);
    $s1->addBookings($b2);
    $s1->addBookings($b3);

    //Exibição dos dados
    echo "Nome do espaço: " . $characteristicsSpace[0]->getName() . "<br>";
    echo "ID do espaço: " . $s1->getSpaceId() . "<br>";
    echo "Condição do espaço: " . $s1->getCondition() .
    '<br><br>';
    echo "Reservas do espaço: <br><br>";

    foreach ($s1->getBookings() as $b) {
        //Acessando o usuário e suas características a partir da reserva
        $user = $b->getUser();
        $characteristicsUser = $user->getCharacteristics();
        echo "ID da reserva: " . $b->getBookingId() . "<br>";
        echo "Horário da reserva: " . $b->getBookingTime() . "<br>";
        echo "Data da reserva: " . $b->getBookingDate() . "<br>";
        echo "Usuário: " . $characteristicsUser[0]->getName() . "<br><br>";
    }
?>