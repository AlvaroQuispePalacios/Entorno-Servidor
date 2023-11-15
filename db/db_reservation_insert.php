<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){
        //Comprueba que el usuario este registrado si no lo esta lo manda al form_login
        if($user_id != NULL || $user_id != ""){
            
            $room_id = $_POST['room_id'];
            $reservation_date_in = $_POST['reservation_date_in'];
            $reservation_date_out = $_POST['reservation_date_out'];
            $reservation_price = $_POST['reservation_price'];
            $reservation_status = $_POST['reservation_status'];
            

            //Conexion a la base de datos
            include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
            
            $sql = "INSERT INTO 044_reservation (reservation_id, customer_id, room_id, reservation_date_in, reservation_date_out, reservation_price, reservation_status)
            VALUES
            (DEFAULT, '$user_id', '$room_id', '$reservation_date_in', '$reservation_date_out', '$reservation_price', '$reservation_status');
            ";
            
            $query = mysqli_query($con, $sql);
            
            if ($query){
                echo "Habitacion Reservada";
            }else{
                echo "Error al reservar";
            }
            mysqli_close($con);
        }else {
            header("Location: /student044/dwes/forms/form_login.php");
        }

    }
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>