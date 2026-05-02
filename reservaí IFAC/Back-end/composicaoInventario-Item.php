<?php
    //Requisição de acesso
    require_once 'Classes/Inventario.php';
    require_once 'Classes/Item.php';
    require_once 'Classes/Caracteristicas.php';

    //Criaçao do inventário
    $Inv = new Inventario ();

    //Criação do item
    $i1 = new Item('1');
    $i1->addCaracteristicas('Carteira', 'Carteira com apoio para o braço direito ou esquerdo.', '40');
    $Inv->addItem($i1);

    $i2 = new Item('2');
    $i2->addCaracteristicas('Quadro', 'Quadro de vidro para escrita e pano retrátil para projeção.', '1');
    $Inv->addItem($i2);

    $i3 = new Item('3');
    $i3->addCaracteristicas('Projetor', 'Projetor fixado no teto direcionado ao quadro de vidro.', '1');
    $Inv->addItem($i3);

    $i4 = new Item('4');
    $i4->addCaracteristicas('Mesa', 'Mesa de escritório simples para uso do docente.', '1');
    $Inv->addItem($i4);

    print 'Itens do Inventário: <br><br>';
    foreach ($Inv->getItem() as $i) {
        $caracteristicas = $i->getCaracteristicas();
        echo 'Nome do item: ' . $caracteristicas[0]->getNome() . '<br>';
        echo 'ID: ' . $i->getIdItem() . '<br>';
        echo 'Descrição: ' . $caracteristicas[0]->getDescricao() . '<br>';
        echo 'Quantidade: ' . $caracteristicas[0]->getQuantidade() . '<br><br>';   
    }
?>