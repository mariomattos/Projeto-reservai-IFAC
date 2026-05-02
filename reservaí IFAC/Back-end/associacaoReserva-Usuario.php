<?php   
    //Requisição de Acesso
    require_once 'Classes/Reserva.php';
    require_once 'Classes/Usuario.php';
    require_once 'Classes/Caracteristicas.php';
    require_once 'Classes/Professor.php';

    //Criação dos Objetos
    $r1 = new Reserva ('1', '13:30', '04/05/2026');
    $p1 = new Professor ('20251CRB45810510000', '', '', 'breno.silveira@ifac.edu.br', '', 'Programação para Web');
    $p1->addCaracteristicas('Breno Carrilo Silveira', '', '');

    //Associação
    $r1->setUsuario($p1);

    //Criando variáveis e atribuindo o resultado dos objetos.
    $usuario = $r1->getUsuario();
    $caracteristicas = $usuario->getCaracteristicas();

    //Exibindo os dados
    echo 'Usuário que fez a reserva: <br><br>';
    echo 'Nome do usuário: ' . $caracteristicas[0]->getNome() . '<br>'; 
    echo 'Disciplina(s): ' . $p1->getDisciplina() . '<br>';
    echo 'Matricula do usuario: ' . $p1->getMatricula() . '<br>';
    echo 'E-mail do usuário: ' . $p1->getEmailUsuario() . '<br>';
    echo 'Horário da reserva: ' . $r1->getHorarioReserva() . '<br>';
    echo 'Data da reserva: ' . $r1->getDataReserva() . '<br>';
?>