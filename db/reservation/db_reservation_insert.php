<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

if (isset($_POST['submit'])) {
    $customer_id = $_POST['customer_id'];
    $room_id = $_POST['room_id'];
    $reservation_date_in = $_POST['reservation_date_in'];
    $reservation_date_out = $_POST['reservation_date_out'];
    $reservation_price = $_POST['reservation_price'];
    $reservation_status = $_POST['reservation_status'];

    //Conexion a la base de datos
    include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

    // JSON QUE VA A SER INSERTADO
    $json_array = ["restaurante" => [], "bar" => [], "spa" => []];
    // $json = '{\"restaurante\":[], \"bar\":[], \"spa\":[]}';
    $json = json_encode($json_array);

    $sql = "INSERT INTO 044_reservation (reservation_id, customer_id, room_id, reservation_date_in, reservation_date_out, reservation_price, reservation_status, reservation_extras)
    VALUES
    (DEFAULT, '$customer_id', '$room_id', '$reservation_date_in', '$reservation_date_out', '$reservation_price', '$reservation_status','$json')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "Reserva completada";
    } else {
        echo "Error al insertar la reserva";
    }
}
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>