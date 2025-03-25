<?php

require_once "connect.php";

function listarProdutos(PDO $connect): array
{
  $sql = "SELECT * FROM produtos";
  try {
    $query = $connect->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $err) {
    die("Erro ao listar produtos: " . $err->getMessage());
  }
}
