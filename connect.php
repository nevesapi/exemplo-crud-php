<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "vendas";

$connect = new PDO(
  "mysql:host=$servidor;dbname=$dbname;charset=utf8",
  $usuario,
  $senha
);
