<?php
require_once "connect.php";

//usada pela página fabricantes/visualizar.php
function listarFabricantes(PDO $connect): array
{
  $sql = "SELECT * FROM fabricantes";
  $query = $connect->prepare($sql);
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
