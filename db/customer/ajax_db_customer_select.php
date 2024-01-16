<?php
// Recuperael parametro de la URL
$q = $_GET["q"];
if ($q != "") {
    //Conexion a la base de datos
    include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');
    $sql = "SELECT * FROM 044_customer WHERE customer_name LIKE '%$q%' ";
    $query = mysqli_query($con, $sql);
    $customers = mysqli_fetch_all($query, MYSQLI_ASSOC);

    function showCustomer($c){
        return json_encode($c);
    }

    foreach($customers as $customer){
        
        // echo $customer["customer_name"] . "<br>";Ç
    }
}
