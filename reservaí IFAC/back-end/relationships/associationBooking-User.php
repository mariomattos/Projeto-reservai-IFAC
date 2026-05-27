<?php   
    //Requisição de Acesso
    require_once '../models/Booking.php';
    require_once '../models/User.php';
    require_once '../models/Teacher.php';

    //Criação dos Objetos
    $b1 = new Booking('1', '04/05/2026', '13:30', '15:30'); 
    $t1 = new Teacher ('1317949', '', '', 'breno.silveira@ifac.edu.br', '', 'Breno Carrillo Silveira', 'Programação para Web');

    //Associação
    $b1->setUser($t1);

    //Exibindo os dados
    echo 'Usuário que fez a reserva: <br><br>';
    echo 'Nome do usuário: ' . $t1->getUserName() . '<br>'; 
    echo 'Disciplina(s): ' . $t1->getSubject() . '<br>';
    echo 'Matricula do usuario: ' . $t1->getRegistrationId() . '<br>';
    echo 'E-mail do usuário: ' . $t1->getUserEmail() . '<br>';
    echo 'Horário de início da reserva: ' . $b1->getBookingStart() . '<br>';
    echo 'Horário de conclusão da reserva: ' . $b1->getBookingEnd() . '<br>';
    echo 'Data da reserva: ' . $b1->getBookingDate() . '<br>';
?>