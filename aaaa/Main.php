<?php
    require_once('Estoque.php');
    require_once('Compra.php');

    
    $estoqueLoja = new Estoque("BURRITO", 2, 10.00);
    $estoqueNew = new Estoque("TACOS", 2, 20.00);

    $clientCompra = new Compra("FRANCESCO", "123", "31/01/2023", $estoqueLoja, 10,00);

    $clientNew = new Compra("VIRGULINI", "354535435", "01/01/01" , $estoqueNew, 20.00);

    echo $clientNew;


?>