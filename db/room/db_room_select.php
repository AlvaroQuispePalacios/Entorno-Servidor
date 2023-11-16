<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>
<?php
    if(isset($_POST['submit'])){
        //Capturar datos de la variable Superglobal $_POST en variables
        $date_in = $_POST['date_in'];
        $date_out = $_POST['date_out'];

        //Comprueba que las fechas no esten vacias(0000-00-00) y que la fecha de entrada sea menor que la fecha de salida
        if(($date_in != NULL || $date_in != "") && ($date_out != NULL || $date_out !="") && ($date_in < $date_out)){
            //Conexion a la base de datos
            include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
                        
            //Recuerda poner las fechas entre comillas simples porque sin comillas no te funciona el WHERE :,c
            $consulta = ("SELECT room_id, room_category_name, room_category_price, room_category_description, room_category_img FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id WHERE 044_room.room_id NOT IN (
                SELECT 044_reservation.room_id
                FROM 044_reservation
                WHERE (
                    044_reservation.reservation_date_in <= '$date_in' AND 044_reservation.reservation_date_out >= '$date_out'
                ) OR (
                    044_reservation.reservation_date_in <= '$date_out' AND 044_reservation.reservation_date_out >= '$date_in'
                )
            );");
    
            $resultado = mysqli_query($con, $consulta);
    
            $rooms = mysqli_fetch_all($resultado, MYSQLI_ASSOC);//Utilizando MYSQLI_ASSOC se puede utilizar para el nombre de la 
            mysqli_close($con);

        }else {
            header("Location: /student044/dwes/forms/room/form_room_select.php");
        }
        
    }
?>

<h2 class="d-flex justify-content-center mt-3">Rooms</h2>
<section class="d-flex flex-wrap justify-content-center">

    <?php
        foreach($rooms as $room){ 
    ?>
    
        <div class="card m-2" style="width: 18rem;">
            
            <img src="<?php print_r($room['room_category_img'])?>" class="card-img-top" alt="Room Img">
            
            <h5 class="card-title m-2"><?php print_r($room['room_category_name'])?></h5>

            <h6 class="card-subtitle m-2 mt-0 text-body-secondary"><?php print_r($room['room_category_price'])?>€ por noche</h6>

            <div class="card-body p-3 pt-1">
                <p class="card-text"><?php print_r($room['room_category_description'])?></p>
                <div class="text-end">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/miniForms/mini_form_reservation_insert.php')?>
                </div>
            </div>
        </div>
        
    <?php
    } 
    ?>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>