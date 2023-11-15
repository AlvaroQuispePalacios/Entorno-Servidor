<?php
    if(isset($_POST['submit'])){
        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');

        $reservation_id = $_POST['reservation_id'];
        
        $sql = "SELECT * FROM 044_reservation WHERE reservation_id = $reservation_id";
        $query = mysqli_query($con, $sql);
        $reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $customer_id = $reservations[0]['customer_id'];
        $room_id = $reservations[0]['room_id'];
        $reservation_date_in = $reservations[0]['reservation_date_in'];
        $reservation_date_out = $reservations[0]['reservation_date_out'];
        $reservation_price = $reservations[0]['reservation_price'];
        $reservation_status = $reservations[0]['reservation_status'];

       mysqli_close($con);
    }
?>