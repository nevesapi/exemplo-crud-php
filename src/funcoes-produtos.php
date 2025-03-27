<?php

require_once "connect.php";

function listarProdutos(PDO $connect): array
{
  // $sql = "SELECT * FROM produtos";
  $sql = "SELECT 
    produtos.id, 
    produtos.nome AS produto, 
    produtos.preco, 
    produtos.quantidade, 
    fabricantes.nome AS fabricante
    FROM produtos
    JOIN fabricantes
    ON produtos.fabricante_id = fabricantes.id
    ORDER BY produto";

  try {
    $query = $connect->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $err) {
    die("Erro ao listar produtos: " . $err->getMessage());
  }
}
