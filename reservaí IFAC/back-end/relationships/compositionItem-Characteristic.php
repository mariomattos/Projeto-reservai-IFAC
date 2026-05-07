<?php
    //Requisiçao de Acesso
    require_once '../models/Characteristic.php';
    require_once '../models/Item.php';
    //Criação do Objeto
    $i1 = new Item('1');
    //Composiçao
    $i1->addCharacteristics('Carteira', 'Carteira com apoio pro braço direito ou esquerdo, cores azul e branco.', '40');

    foreach ($i1->getCharacteristics() as $c) {
        print 'Caracteristicas do Item: <br><br> Nome: ' . $c->getName() . '<br>' . 'Descrição: ' . $c->getDescription() . '<br>' . 'Quantidade: ' . $c->getQuantity() . '<br>';
    }
    
    print 'ID: ' . $i1->getItemId() . '<br>';
?>