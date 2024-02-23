<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<?php
//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql_reservation = "SELECT reservation_id FROM 044_reservation ORDER BY reservation_id DESC LIMIT 1";
$query_reservation = mysqli_query($con, $sql_reservation);
$reservation = mysqli_fetch_all($query_reservation, MYSQLI_NUM);
$reservation_number = $reservation[0][0]+1;
//Buscar infomacion(SELECT)
$sql_customer = ("SELECT * FROM 044_customer");
$query_customer = mysqli_query($con, $sql_customer);
$customers = mysqli_fetch_all($query_customer, MYSQLI_ASSOC);




$sql_room = ("SELECT * FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id");
$query_room = mysqli_query($con, $sql_room);
$rooms = mysqli_fetch_all($query_room, MYSQLI_ASSOC);

$rooms_js = json_encode($rooms);

mysqli_close($con);
?>

<h2>Nueva reserva</h2>
<div class="p-5">
    <div class="contenedor__form">

        <form action="/student044/dwes/forms/reservation/form_reservation_insert.php" method="POST">
            <h4 class="text-center">Datos de la reserva</h4>
            <div class="d-flex flex-column justify-content-center align-items-center">

                <label>Usuario ID:</label>
                <select class="w-50 p-2" name="customer_id" id="formReservationInsertCustomerId" required>
                    <option value="">Elige un usuario</option>
                    <?php foreach ($customers as $customer) { ?>
                        <option value="<?php print_r($customer['customer_id']) ?>"><?php print_r($customer['customer_id']) ?></option>
                    <?php } ?>
                </select>
            
                <label>Date In:</label>
                <input class="w-50" type="date" name="reservation_date_in" id="formReservationInsertDateIn" required>
            
                <label>Date Out:</label>
                <input class="w-50" type="date" name="reservation_date_out" id="formReservationInsertDateOut" required>
            
                <input type="submit" name="submit" value="Buscar Habitaciones">
            </div>
        </form>
    </div>
    <br>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>