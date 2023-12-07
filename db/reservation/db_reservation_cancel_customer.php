<?php
    // Antes de poder cancelar la reserva volver a preguntarle si de verdad desea cancelar la reserva
    if(isset($_POST['submit'])){
        $reservation_id = $_POST['reservation_id'];
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
        $sql = "UPDATE 044_reservation SET reservation_status = 'CANCELLED' WHERE reservation_id = $reservation_id";
        $query = mysqli_query($con, $sql);
        if($query){
            header("Location: /student044/dwes/db/reservation/db_reservation_select_customer.php");
        }else{
            echo "Error";
        }
    }
?>
