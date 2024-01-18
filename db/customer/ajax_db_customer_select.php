<?php
// Recuperael parametro de la URL
$q = $_GET["q"];

include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/functions/php/front/showCustomer.php');

if ($q != "") {
    //Conexion a la base de datos

    $sql = "SELECT * FROM 044_customer WHERE customer_name LIKE '%$q%' ";
    $query = mysqli_query($con, $sql);
    $customers = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($customers as $customer){
        showCustomer($customer);
    }

}else {
    $sql = "SELECT * FROM 044_customer";
    $query = mysqli_query($con, $sql);
    $customers = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($customers as $customer){
        showCustomer($customer);
    }
}
