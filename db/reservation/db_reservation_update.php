<?php
    if(isset($_POST['submit'])){
        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');

        $reservation_id = $_POST['reservation_id'];
        $customer_id = $_POST['customer_id'];
        $room_id = $_POST['room_id'];
        $reservation_date_in = $_POST['reservation_date_in'];
        $reservation_date_out = $_POST['reservation_date_out'];
        $reservation_price = $_POST['reservation_price'];
        $reservation_status = $_POST['reservation_status'];

        $sql = "UPDATE 044_reservation SET customer_id = '$customer_id', room_id = '$room_id', reservation_date_in = '$reservation_date_in', reservation_date_out = '$reservation_date_out', reservation_price = '$reservation_price', reservation_status = '$reservation_status' WHERE reservation_id = $reservation_id";

        $query = mysqli_query($con, $sql);

        if($query){
            echo "La reserva fue actualizada";
        }else{
            echo "Ha ocurrido un error";
        }
    }
?>