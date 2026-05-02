<?php
    //Requisição de acesso
    require_once 'Classes/Item.php';
    require_once 'Classes/Espaco.php';
    require_once 'Classes/Caracteristicas.php';
    
    //Criação do objeto
    $e1 = new Espaco (1, "Disponível");
    $e1->addCaracteristicas ('Sala de Aula', '', '');
    $caracteristicas = $e1->getCaracteristicas();

    //Criando os itens e adicionando caracteristicas
    $i1 = new Item ('1');
    $i1->addCaracteristicas('Carteira', 'Carteira com apoio para o braço direito ou esquerdo.', '40');

    $i2 = new Item ('2');
    $i2->addCaracteristicas('Quadro', 'Quadro de vidro para escrita e pano retrátil para projeção.', '1');

    $i3 = new Item ('3');
    $i3->addCaracteristicas('Projetor', 'Projetor fixado no teto direcionado ao quadro de vidro.', '1');

    $i4 = new Item ('4');
    $i4->addCaracteristicas('Mesa', 'Mesa de escritório simples para uso do docente.', '1');

    //Agregando os itens ao espaço
    $e1->addItens($i1);
    $e1->addItens($i2);
    $e1->addItens($i3);
    $e1->addItens($i4);

    //Exibição dos dados
    echo "Nome do espaço: " . $caracteristicas[0]->getNome() . "<br>";
    echo "ID do espaço: " . $e1->getIdEspaco() . "<br>";
    echo "Condição do espaço: " . $e1->getCondicao() . "<br><br>";
    echo "Itens no espaço: <br><br>";
    
    foreach ($e1->getItens() as $item) {
        $caracteristicas = $item->getCaracteristicas();
        echo "ID: " . $item->getIdItem() . "<br>";
        echo "Nome: " . $caracteristicas[0]->getNome() . "<br>";
        echo "Descrição:  " . $caracteristicas[0]->getDescricao() . "<br>";
        echo "Quantidade:  " . $caracteristicas[0]->getQuantidade() . "<br><br>";
    }
?>