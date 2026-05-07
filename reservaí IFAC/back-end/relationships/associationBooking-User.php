<?php   
    //Requisição de Acesso
    require_once '../models/Booking.php';
    require_once '../models/User.php';
    require_once '../models/Characteristic.php';
    require_once '../models/Teacher.php';

    //Criação dos Objetos
    $b1 = new Booking ('1', '13:30', '04/05/2026');
    $t1 = new Teacher ('1317949', '', '', 'breno.silveira@ifac.edu.br', '', 'Programação para Web');
    $t1->addCharacteristics('Breno Carrilo Silveira', '', '');

    //Associação
    $b1->setUser($t1);

    //Criando variáveis e atribuindo o resultado dos objetos.
    $user = $b1->getUser();
    $characteristics = $user->getCharacteristics();

    //Exibindo os dados
    echo 'Usuário que fez a reserva: <br><br>';
    echo 'Nome do usuário: ' . $characteristics[0]->getName() . '<br>'; 
    echo 'Disciplina(s): ' . $t1->getSubject() . '<br>';
    echo 'Matricula do usuario: ' . $t1->getRegistrationId() . '<br>';
    echo 'E-mail do usuário: ' . $t1->getUserEmail() . '<br>';
    echo 'Horário da reserva: ' . $b1->getBookingTime() . '<br>';
    echo 'Data da reserva: ' . $b1->getBookingDate() . '<br>';
?>