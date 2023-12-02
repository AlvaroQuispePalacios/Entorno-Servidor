
<?php
    if(isset($_POST['submit'])){

        $reservation_id = $_POST['reservation_id'];
        $reservation_extra = $_POST['reservation_extra'];
        $extra_name = $_POST['extra_name'];
        $extra_date = $_POST['extra_date'];
        $date_now = date("Y-m-d H:i:s");

        if($extra_date == null || $extra_date = ''){
            $extra_date = $date_now;
        }
        $extra_price = $_POST['extra_price'];
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
        // Array a agregar
        $extras = array('name'=>$extra_name, 'date'=>$extra_date, 'price'=>$extra_price);

        // JSON tomado de la base de datos, lo agarremos lo convertimos en array, luego le agregamos el otro array que vamos a subir y lo volvemos a codificar y lo subimos al servidor
        $sql_db_json = "SELECT * FROM 044_reservation WHERE reservation_id='$reservation_id'";
        $query_db_json = mysqli_query($con, $sql_db_json);
        $db_json = mysqli_fetch_all($query_db_json, MYSQLI_ASSOC);

        $db_json_decode = json_decode($db_json[0]['reservation_extras'], true);
        $db_json_decode_keys = array_keys($db_json_decode);

        foreach($db_json_decode_keys as $json_key){
            if($json_key == $reservation_extra){
                array_push($db_json_decode[$reservation_extra], $extras);
                $insert_extra = json_encode($db_json_decode);

                $sql = "UPDATE 044_reservation SET reservation_extras = '$insert_extra' WHERE reservation_id = $reservation_id";
                $query = mysqli_query($con, $sql);

                if($query){
                    header('Location: /student044/dwes/db/reservation/db_reservation_select.php');
                }else{
                    echo 'Se ha producido un error';
                }
            }
        }
    }
?>
