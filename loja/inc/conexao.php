<?php
session_start();

//configura com o TEU caminho de instalação
$base_path = 'C:\Bitnami\wappstack-7.1.14-0\apache2\htdocs\loja';
$base_url = 'http://localhost/loja/';

$conexao = pg_connect('host=localhost port=5433 dbname=banco_ecomerce user=postgres password=pastel');
if(!$conexao){
	echo 'Não conectou com o banco de dados.';
}