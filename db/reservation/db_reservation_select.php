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
                    ?>

                </td>

                <td>

                    <!-- <button class="myButtonModal">Actualizar</button>

                    <div class="containerMyModal">
                        <div class="myModal">
                            <div class="myModalTitle">
                                <h2>Reserva</h2>
                                <div class="myModalClose">
                                    <button>X</button>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="myModalBody">
                                <form action="/student044/dwes/db/reservation/db_reservation_update.php" method="POST">
            
                                    <label>Reservation ID:</label>
                                    <input type="text" value="<?php print_r($reservation['reservation_id']); ?>" name="reservation_id" readonly>
            
                                    <label>Customer ID</label>
                                    <input type="text" value="<?php print_r($reservation['customer_id']); ?>" name="customer_id">
            
                                    <label>Room ID</label>
                                    <input type="text" value="<?php print_r($reservation['room_id']); ?>" name="room_id">
            
                                    <label>Fecha entrada</label>
                                    <input type="date" value="<?php print_r($reservation['reservation_date_in']); ?>" name="reservation_date_in">
            
                                    <label>Fecha salida</label>
                                    <input type="date" value="<?php print_r($reservation['reservation_date_out']); ?>" name="reservation_date_out">
            
                                    <label>Precio por noche</label>
                                    <input type="text" value="<?php print_r($reservation['reservation_price']); ?>" name="reservation_price">
            
                                    <label>Estado de la habitacion</label>
                                    <select name="reservation_status">
                                        <?php if ($reservation['reservation_status'] == 'BOOKED') { ?>
                                            <option value="BOOKED" selected="selected">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'CHECK_IN') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN" selected="selected">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'CHECK_OUT') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT" selected="selected">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'CANCELLED') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED" selected="selected">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'ABSENT') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT" selected="selected">ABSENT</option>
                                        <?php } ?>
                                    </select>
                            </div>
                            <div class="myModalFooter">
                                <hr>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary" value="Guardar cambios" name="submit"></input>
                            </div>
                        </div>
                    </div>
 -->

                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <button class="myButtonModal">Actualizar</button>

                    <div class="containerMyModal">
                        <div class="myModal">
                            <div class="myModalTitle">
                                <h2>Reserva</h2>
                                <div class="myModalClose">
                                    <button>X</button>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="myModalBody">
                                <form action="/student044/dwes/db/reservation/db_reservation_update.php" method="POST">
            
                                    <label>Reservation ID:</label>
                                    <input type="text" value="<?php print_r($reservation['reservation_id']); ?>" name="reservation_id" readonly>
            
                                    <label>Customer ID</label>
                                    <input type="text" value="<?php print_r($reservation['customer_id']); ?>" name="customer_id">
            
                                    <label>Room ID</label>
                                    <input type="text" value="<?php print_r($reservation['room_id']); ?>" name="room_id">
            
                                    <label>Fecha entrada</label>
                                    <input type="date" value="<?php print_r($reservation['reservation_date_in']); ?>" name="reservation_date_in">
            
                                    <label>Fecha salida</label>
                                    <input type="date" value="<?php print_r($reservation['reservation_date_out']); ?>" name="reservation_date_out">
            
                                    <label>Precio por noche</label>
                                    <input type="text" value="<?php print_r($reservation['reservation_price']); ?>" name="reservation_price">
            
                                    <label>Estado de la habitacion</label>
                                    <select name="reservation_status">
                                        <?php if ($reservation['reservation_status'] == 'BOOKED') { ?>
                                            <option value="BOOKED" selected="selected">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'CHECK_IN') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN" selected="selected">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'CHECK_OUT') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT" selected="selected">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'CANCELLED') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED" selected="selected">CANCELLED</option>
                                            <option value="ABSENT">ABSENT</option>
                                        <?php } elseif ($reservation['reservation_status'] == 'ABSENT') { ?>
                                            <option value="BOOKED">BOOKED</option>
                                            <option value="CHECK_IN">CHECK_IN</option>
                                            <option value="CHECK_OUT">CHECK_OUT</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="ABSENT" selected="selected">ABSENT</option>
                                        <?php } ?>
                                    </select>
                            </div>
                            <div class="myModalFooter">
                                <hr>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary" value="Guardar cambios" name="submit"></input>
                            </div>
                        </div>
                    </div>


</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>