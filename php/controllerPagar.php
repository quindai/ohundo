<?php

require './Pagamentos.php';

$pagamentos = new Pagamentos();

$pagamentos->setCliente($_GET['cliente']);
$pagamentos->setComerciante("COM1520141592");
$pagamentos->setPagamentos(38000);
$pagamentos->setProduto("Curso de HTML5/CSS3/AngularJS+Phonegap");
$pagamentos->setQtd(1);
$pagamentos->setEmail($_GET['email']);
$pagamentos->setPreco(38000);
$pagamentos->transacaoCompra();


if (str_word_count($pagamentos->transacaoCompra()) < 1){
	echo "Compra efectuada com sucesso!";
}else{
	echo $pagamentos->transacaoCompra();
//    echo "<script>window.history.back();</script>";
}


