<?php
    //Requisiçao de Acesso
    require_once '../models/Characteristics.php';
    require_once '../models/Space.php';
    
    //Criaçao do Objeto
    $s1 = new Space ('1', 'Disponível');

    //Composiçao
    $s1->addCharacteristics('Sala de Aula', 'Espaço para Aulas extras, aplicação de provas, ou reuniões.', '18');
    
    foreach ($s1->getCharacteristics() as $c) {
        print 'Caracteristicas do Espaço: <br> <br> Nome: ' . $c->getName() . '<br>' . 'Descrição: ' . $c->getDescription() . '<br>' . 'Quantidade: ' . $c->getQuantity() . '<br>';
    }

    echo 'ID do espaço: ' . $s1->getSpaceId() . '<br>';
    echo 'Condição: ' . $s1->getCondition() . '<br>';
?>