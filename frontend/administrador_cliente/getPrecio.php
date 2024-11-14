<?php 
require_once('../../backend/bd/ctconex.php');

$id_sitio = $_GET['id'];
$query = "SELECT precsiti FROM sitios WHERE idsit = :id_sitio";
$stmt = $connect->prepare($query);
$stmt->bindParam(':id_sitio', $id_sitio, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $row['precsiti'];

 ?>