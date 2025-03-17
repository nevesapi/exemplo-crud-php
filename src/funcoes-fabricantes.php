<?php
require_once "connect.php";

//listando todos os fabricantes
function listarFabricantes(PDO $connect): array
{
  $sql = "SELECT * FROM fabricantes ORDER BY nome";

  try {
    $query = $connect->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $erro) {
    die("Erro ao listar fabricantes: " . $erro->getMessage());
  }
}

//inserindo novo fabricante
function inserirFabricante(PDO $connect, string $nomeFabrincante): void
{
  $sql = "INSERT INTO fabricantes(nome) VALUES(:nome)";

  try {
    $query = $connect->prepare($sql);
    $query->bindValue(":nome", $nomeFabrincante, PDO::PARAM_STR);
    $query->execute();
  } catch (Exception $erro) {
    die("Erro ao cadastrar fabricante: " . $erro->getMessage());
  }
}
