<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT * FROM 044_reservation";
$query = mysqli_query($con, $sql);
$reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<table class="mt-3 text-center w-100">
    <tr class="p-2">
        <th>Reservation ID</th>
        <th>Customer ID</th>
        <th>Room ID</th>
        <th>Date in</th>
        <th>Date out</th>
        <th>Reservation Price</th>
        <th>Reservation Status</th>
        <th>Reservation Extras</th>
        <th>Actions</th>
    </tr>

    <?php
    foreach ($reservations as $reservation) {
    ?>
        <tr>
            <td>
                <?php print_r($reservation['reservation_id']); ?>
            </td>
            <td>
                <?php print_r($reservation['customer_id']); ?>
            </td>
            <td>
                <?php print_r($reservation['room_id']); ?>
            </td>
            <td>
                <?php print_r($reservation['reservation_date_in']); ?>
            </td>
            <td>
                <?php print_r($reservation['reservation_date_out']); ?>
            </td>
            <td>
                <?php print_r($reservation['reservation_price']); ?>
            </td>
            <td>
                <?php print_r($reservation['reservation_status']); ?>
            </td>

            <td>
                <?php
                $extras = json_decode($reservation['reservation_extras'], true);
                ?>

            </td>

            <td>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/miniForms/mini_form_reservation_update.php') ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/miniForms/mini_form_reservation_delete.php') ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>