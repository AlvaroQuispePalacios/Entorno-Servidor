<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

if (isset($_POST['submit'])) {

    $reservation_date_in = $_POST['reservation_date_in'];
    $reservation_date_out = $_POST['reservation_date_out'];

    if ($reservation_date_in < $reservation_date_out) {
        $customer_id = $_POST['customer_id'];
        $room_id = $_POST['room_id'];

        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

        $sql_room = ("SELECT * FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id WHERE 044_room.room_id = '$room_id'");
        $query_room = mysqli_query($con, $sql_room);
        $room = mysqli_fetch_all($query_room, MYSQLI_ASSOC);
        $reservation_price = ($room[0]["room_category_price"]);
        // JSON QUE VA A SER INSERTADO
        $json = json_encode('{"restaurante":[], "bar":[], "spa":[]}');

        $sql = "INSERT INTO 044_reservation (reservation_id, customer_id, room_id, reservation_date_in, reservation_date_out, reservation_price, reservation_status, reservation_extras)
        VALUES (DEFAULT, '$customer_id', '$room_id', '$reservation_date_in', '$reservation_date_out', '$reservation_price', 'BOOKED', $json)";

        $query = mysqli_query($con, $sql);

        if ($query) {
            echo "Habitacion Reservada";
            //(Agregar) Aqui estara los datos del usuario, la habitacion, reserva, y tambien estara el precio total de la reserva
        } else {
            echo "Error al reservar";
        }

        mysqli_close($con);
    } else {

?>
        <a href="/student044/dwes/forms/reservation/form_reservation_insert.php" class="volverAtras">
            <svg xmlns="http://www.w3.org/2000/svg" height="70" width="70" viewBox="0 0 448 512">
                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="msgError">
            <div class="msgErrorContenido">
                <h2>Ha ocurrido un error</h2>
                <h3 class="text-center">D:</h3>
            </div>
        </div>

    <?php } ?>
<?php } ?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>