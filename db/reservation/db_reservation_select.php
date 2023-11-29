<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT * FROM 044_reservation";
$query = mysqli_query($con, $sql);
$reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<div class="d-flex justify-content-center align-items-center">

    <table class="border mt-3 text-center">
        <tr class="border p-2">
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
            <tr class="border">
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
                    if ($extras === null) {
                        echo "";
                    } else { ?>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Restaurante
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Restaurante</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        <?php
                                        foreach ($extras['restaurante'] as $extra) {
                                            print_r('Fecha: ' . $extra['date'] . ' <br>Precio: ' . $extra['price'] . '<br>');
                                        }

                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Save changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>




                </td>

                <td>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/miniForms/mini_form_reservation_update.php'); ?>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/miniForms/mini_form_reservation_delete.php'); ?>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>