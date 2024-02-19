<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){
        //Comprueba que el usuario este registrado si no lo esta lo manda al form_login
        if($user_id != NULL || $user_id != ""){

            //Conexion a la base de datos
            include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
            
            $room_id = $_POST['room_id'];
            $reservation_date_in = $_POST['reservation_date_in'];
            $reservation_date_out = $_POST['reservation_date_out'];
            $reservation_price = $_POST['reservation_price'];
            $reservation_status = $_POST['reservation_status'];

            // Determinamos que la variable no este vacia 
            $json_array = ["restaurante"=>[], "bar"=>[], "spa"=>[]];

            if(isset($_POST["extra_reservation"])){
                $extra_reservation = $_POST["extra_reservation"];
                foreach($extra_reservation as $extra){
                    if($extra == "wifi"){
                        $json_array["wifi"][] = ["name" => "wifi", "date" => "", "price" => "11"];
                    }
                    if($extra == "minibar"){
                        $json_array["minibar"][] = ["name" => "minibar", "date" => "", "price" => "22"];
                    }
                }
            }else{
                
            }

            $json =json_encode($json_array);

            $sql = "INSERT INTO 044_reservation (reservation_id, customer_id, room_id, reservation_date_in, reservation_date_out, reservation_price, reservation_status, reservation_extras)
            VALUES
            (DEFAULT, '$user_id', '$room_id', '$reservation_date_in', '$reservation_date_out', '$reservation_price', '$reservation_status', '$json');
            ";
    
            $query = mysqli_query($con, $sql);
        
            if ($query){
                echo "Habitacion Reservada";
                //(Agregar) Aqui estara los datos del usuario, la habitacion, reserva, y tambien estara el precio total de la reserva
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