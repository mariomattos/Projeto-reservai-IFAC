<?php
    //Requisição de acesso
    require_once '../models/Item.php';
    require_once '../models/Space.php';
    require_once '../models/Characteristics.php';
    
    //Criação do objeto
    $s1 = new Space (1, "Disponível");
    $s1->addCharacteristics ('Sala de Aula', '', '');
    $characteristics = $s1->getCharacteristics();

    //Criando os itens e adicionando caracteristicas
    $i1 = new Item ('1');
    $i1->addCharacteristics('Carteira', 'Carteira com apoio para o braço direito ou esquerdo.', '40');

    $i2 = new Item ('2');
    $i2->addCharacteristics('Quadro', 'Quadro de vidro para escrita e pano retrátil para projeção.', '1');

    $i3 = new Item ('3');
    $i3->addCharacteristics('Projetor', 'Projetor fixado no teto direcionado ao quadro de vidro.', '1');

    $i4 = new Item ('4');
    $i4->addCharacteristics('Mesa', 'Mesa de escritório simples para uso do docente.', '1');

    //Agregando os itens ao espaço
    $s1->addItems($i1);
    $s1->addItems($i2);
    $s1->addItems($i3);
    $s1->addItems($i4);

    //Exibição dos dados
    echo "Nome do espaço: " . $characteristics[0]->getName() . "<br>";
    echo "ID do espaço: " . $s1->getSpaceId() . "<br>";
    echo "Condição do espaço: " . $s1->getCondition() . "<br><br>";

    echo "Itens no espaço: <br><br>";
    foreach ($s1->getItems() as $item) {
        $characteristics = $item->getCharacteristics();
        echo "ID: " . $item->getItemId() . "<br>";
        echo "Nome: " . $characteristics[0]->getName() . "<br>";
        echo "Descrição:  " . $characteristics[0]->getDescription() . "<br>";
        echo "Quantidade:  " . $characteristics[0]->getQuantity() . "<br><br>";
    }
?>