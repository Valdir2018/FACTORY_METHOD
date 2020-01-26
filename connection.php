<?php

require_once "CLASSES/ACTIVE_RECORD/Produto.php";
require_once "CLASSES/API/Connection.php";


try{

	$conn = Connection::open('estoque');
	Produto::setConnection($conn);


	$pro = new Produto;
	$pro->descricao     = 'Cafe Tres Coracoes';
	$pro->estoque       = 100;
	$pro->preco_custo   = 4;
    $pro->preco_venda   = 7;
    $pro->codigo_barras = '12345567890';
    $pro->data_cadastro = date('Y-m-d');
    $pro->origem        = 'N';
    $pro->save();

} catch(Exception $e) {
    print $e->getMessage();
}



















?>