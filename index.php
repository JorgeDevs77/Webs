<?php

$conectar =  mysqli_connect("localhost","root","","perfil") or die("falho");
$nome = "jorge";


$query_create_table ="CREATE TABLE ".$nome."(
    id INT NULL AUTO_INCREMENT,
    nome varchar(20),
    curso varchar(10),
    primary key(id)
)" or die("TABELA NÃO CRIADA");
$result_create_table = $conectar->query($query_create_table);



?>


