<?php
//Conexion a la base de datos
$variable = $_POST["variable"];
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT * FROM 044_reservation WHERE customer_id = $variable";
$query = mysqli_query($con, $sql);
$reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);


print_r($reservations);
?>
