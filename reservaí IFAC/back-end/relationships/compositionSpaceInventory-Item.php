<?php
    //Requisição de acesso
    require_once '../models/SpaceInventory.php';
    require_once '../models/Item.php';
    require_once '../models/Space.php';

    //Criaçao do inventário do espaço
    $s1 = new Space ('1', 'Disponível', 'Sala B-111', '');
    $inv = new SpaceInventory ($s1->getSpaceId());

    //Criação do item
    $i1 = new Item('1', 'Carteira', 'Carteira com apoio para o braço direito ou esquerdo.', '40');
    
    $i2 = new Item('2', 'Quadro', 'Quadro de vidro para escrita e pano retrátil para projeção.', '1');
    
    $i3 = new Item('3', 'Projetor', 'Projetor fixado no teto direcionado ao quadro de vidro.', '1');

    $i4 = new Item('4', 'Mesa', 'Mesa de escritório simples para uso do docente.', '1');

    $inv->addItems($i1);
    $inv->addItems($i2);
    $inv->addItems($i3);
    $inv->addItems($i4);

    print 'Inventário do espaço: ' . $s1->getSpaceName() . '<br>';
    print 'Id do Inventário: ' . $s1->getSpaceId() . '<br><br>';
    foreach ($inv->getItems() as $i) {
        echo 'Nome do item: ' . $i->getItemName() . '<br>';
        echo 'ID: ' . $i->getItemId() . '<br>';
        echo 'Descrição: ' . $i->getItemDescription() . '<br>';
        echo 'Quantidade: ' . $i->getItemQuantity() . '<br><br>';   
    }
?>