<?php
    //Requisição de acesso
    require_once '../models/Inventory.php';
    require_once '../models/Item.php';

    //Criaçao do inventário
    $Inv = new Inventory ();

    //Criação do item
    $i1 = new Item('1', 'Carteira', 'Carteira com apoio para o braço direito ou esquerdo.', '40');
    
    $i2 = new Item('2', 'Quadro', 'Quadro de vidro para escrita e pano retrátil para projeção.', '1');
    
    $i3 = new Item('3', 'Projetor', 'Projetor fixado no teto direcionado ao quadro de vidro.', '1');

    $i4 = new Item('4', 'Mesa', 'Mesa de escritório simples para uso do docente.', '1');

    $Inv->addItems($i1);
    $Inv->addItems($i2);
    $Inv->addItems($i3);
    $Inv->addItems($i4);

    print 'Itens do Inventário: <br><br>';
    foreach ($Inv->getItems() as $i) {
        echo 'Nome do item: ' . $i->getItemName() . '<br>';
        echo 'ID: ' . $i->getItemId() . '<br>';
        echo 'Descrição: ' . $i->getItemDescription() . '<br>';
        echo 'Quantidade: ' . $i->getItemQuantity() . '<br><br>';   
    }
?>