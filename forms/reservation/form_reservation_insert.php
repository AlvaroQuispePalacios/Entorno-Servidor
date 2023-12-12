<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

if (isset($_POST['submit'])) {

    $reservation_date_in = $_POST['reservation_date_in'];
    $reservation_date_out = $_POST['reservation_date_out'];

    //Comprueba que las fechas no esten vacias(0000-00-00) y que la fecha de entrada sea menor que la fecha de salida
    if (($reservation_date_in != NULL || $reservation_date_in != "") && ($reservation_date_out != NULL || $reservation_date_out != "") && ($reservation_date_in < $reservation_date_out)) {
        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

        $customer_id = $_POST['customer_id'];

        //Recuerda poner las fechas entre comillas simples porque sin comillas no te funciona el WHERE :,c
        $consulta = ("SELECT room_id, room_category_name, room_category_price, room_category_description, room_category_img FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id WHERE 044_room.room_id NOT IN (
            SELECT 044_reservation.room_id
            FROM 044_reservation
            WHERE (
                044_reservation.reservation_date_in <= '$reservation_date_in' AND 044_reservation.reservation_date_out >= '$reservation_date_out'
            ) OR (
                044_reservation.reservation_date_in <= '$reservation_date_out' AND 044_reservation.reservation_date_out >= '$reservation_date_in'
            )
        );");

        $resultado = mysqli_query($con, $consulta);

        $rooms = mysqli_fetch_all($resultado, MYSQLI_ASSOC); //Utilizando MYSQLI_ASSOC se puede utilizar para el nombre de la 
        mysqli_close($con);
    } else {
        header("Location: /student044/dwes/forms/room/form_reservation_insert.php");
    }
}

?>

<h2 class="d-flex justify-content-center mt-3">Rooms</h2>
<section class="d-flex flex-wrap justify-content-center">

    <?php
    foreach ($rooms as $room) {
    ?>

        <div class="card m-2" style="width: 18rem;">

            <img src="<?php print_r($room['room_category_img']) ?>" class="card-img-top" alt="Room Img">

            <h5 class="card-title m-2"><?php print_r($room['room_category_name']) ?></h5>

            <h6 class="card-subtitle m-2 mt-0 text-body-secondary"><?php print_r($room['room_category_price']) ?>€ por noche</h6>

            <div class="card-body p-3 pt-1">
                <p class="card-text"><?php print_r($room['room_category_description']) ?></p>
                <div class="text-end">

                    <form action="/student044/dwes/db/reservation/db_reservation_insert.php" method="POST">
                        <input type="hidden" name="customer_id" value="<?php echo $customer_id?>">
                        <input type="hidden" name="room_id" value="<?php print_r($room['room_id']) ?>">
                        <input type="hidden" name="reservation_date_in" value="<?php echo $reservation_date_in ?>">
                        <input type="hidden" name="reservation_date_out" value="<?php echo $reservation_date_out ?>">
                        <input type="hidden" name="reservation_price" value="<?php print_r($room['room_category_price']) ?>">
                        <input type="hidden" name="reservation_status" value="BOOKED">
                        <input class="btn btn-success" type="submit" name="submit" value="Reservar">
                    </form>

                </div>
            </div>
        </div>

    <?php
    }
    ?>
</section>
<!-- <a href="/student044/dwes/forms/reservation/form_reservation_insert.php" class="volverAtras">
            <svg xmlns="http://www.w3.org/2000/svg" height="70" width="70" viewBox="0 0 448 512">
                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="msgError">
            <div class="msgErrorContenido">
                <h2>Ha ocurrido un error</h2>
                <h3 class="text-center">D:</h3>
            </div>
        </div> -->



<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>