<?php
    //Requisição de acesso
    require_once 'Classes/Item.php';
    require_once 'Classes/Espaco.php';
    
    //Criação do objeto
    $e1 = new Espaco (1, "Disponível");

    //Agregação das reservas no espaço
    $e1->addItens($i1 = new Item ('1'));
    $e1->addItens($i1 = new Item ('2'));
    $e1->addItens($i1 = new Item ('3'));

    //Exibição dos dados
    echo "ID do espaço: " . $e1->getIdEspaco() . "<br>";
    echo "Condição do espaço: " . $e1->getCondicao() . "<br><br>";
    echo "Itens no espaço: <br>";
    foreach ($e1->getItens() as $item) {
        echo " " . $item->getIdItem() . "<br>";
    }
?>