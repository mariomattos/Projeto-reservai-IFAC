<?php
    //Requisição de acesso
    require_once '../models/Item.php';
    require_once '../models/Space.php';
    
    //Criação do objeto
    $s1 = new Space ('1', 'Disponível', 'Sala B-111', '');

    //Criando os itens e adicionando caracteristicas
    $i1 = new Item ('1', 'Carteira', 'Carteira com apoio para o braço direito ou esquerdo.', '40');

    $i2 = new Item ('2', 'Quadro', 'Quadro de vidro para escrita e pano retrátil para projeção.', '1');

    $i3 = new Item ('3', 'Projetor', 'Projetor fixado no teto direcionado ao quadro de vidro.', '1');
    
    $i4 = new Item ('4', 'Mesa', 'Mesa de escritório simples para uso do docente.', '1');

    //Agregando os itens ao espaço
    $s1->addItems($i1);
    $s1->addItems($i2);
    $s1->addItems($i3);
    $s1->addItems($i4);

    //Exibição dos dados
    echo "Nome do espaço: " . $s1->getSpaceName() . "<br>";
    echo "ID do espaço: " . $s1->getSpaceId() . "<br>";
    echo "Condição do espaço: " . $s1->getSpaceCondition() . "<br><br>";

    echo "Itens no espaço: <br><br>";
    foreach ($s1->getItems() as $item) {
        echo "Nome: " . $item->getItemName() . "<br>";
        echo "ID: " . $item->getItemId() . "<br>";
        echo "Descrição:  " . $item->getItemDescription() . "<br>";
        echo "Quantidade:  " . $item->getItemQuantity() . "<br><br>";
    }
?>