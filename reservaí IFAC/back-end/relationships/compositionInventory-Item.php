<?php
    //Requisição de acesso
    require_once '../models/Inventory.php';
    require_once '../models/Item.php';
    require_once '../models/Characteristics.php';

    //Criaçao do inventário
    $Inv = new Inventory ();

    //Criação do item
    $i1 = new Item('1');
    $i1->addCharacteristics('Carteira', 'Carteira com apoio para o braço direito ou esquerdo.', '40');
    $Inv->addItems($i1);

    $i2 = new Item('2');
    $i2->addCharacteristics('Quadro', 'Quadro de vidro para escrita e pano retrátil para projeção.', '1');
    $Inv->addItems($i2);

    $i3 = new Item('3');
    $i3->addCharacteristics('Projetor', 'Projetor fixado no teto direcionado ao quadro de vidro.', '1');
    $Inv->addItems($i3);

    $i4 = new Item('4');
    $i4->addCharacteristics('Mesa', 'Mesa de escritório simples para uso do docente.', '1');
    $Inv->addItems($i4);

    print 'Itens do Inventário: <br><br>';
    foreach ($Inv->getItems() as $i) {
        $characteristics = $i->getCharacteristics();
        echo 'Nome do item: ' . $characteristics[0]->getName() . '<br>';
        echo 'ID: ' . $i->getItemId() . '<br>';
        echo 'Descrição: ' . $characteristics[0]->getDescription() . '<br>';
        echo 'Quantidade: ' . $characteristics[0]->getQuantity() . '<br><br>';   
    }
?>