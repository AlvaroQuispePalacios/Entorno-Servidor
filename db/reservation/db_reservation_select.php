<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT * FROM 044_reservation";
$query = mysqli_query($con, $sql);
$reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<div class="title">Reservas</div>
<div class="px-5">

    <table class="text-center w-100">
        <tr>
            <th>Reservation ID</th>
            <th>Customer ID</th>
            <th>Room ID</th>
            <th>Date in</th>
            <th>Date out</th>
            <th>Reservation Price</th>
            <th>Subtotal</th>
            <th>Reservation Status</th>
            <th>Reservation Extras</th>
            <th>Total</th>
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
                    <?php
                        $price = $reservation['reservation_price'];
                        $date_in = new DateTime($reservation['reservation_date_in']);
                        $date_out = new DateTime($reservation['reservation_date_out']);
                        $diferencia = $date_in->diff($date_out);
                        $diferencia_dias = $diferencia->days;
                        $subtotal = $diferencia_dias*$price;
                        echo $subtotal."€";
                        ?>
                </td>
                <td>
                    <?php print_r($reservation['reservation_status']); ?>
                </td>
    
                <td>
                    <?php
                    $json = json_decode($reservation['reservation_extras'], true);
                    $total_bar = 0;
                    $total_restaurante = 0;
                    $total_extras = 0;
                    ?>
    
                    <?php if ($json === null) { ?>
                        <?php echo "Servicios no encontrados"; ?>
                    <?php } else { ?>
                        <?php $extras = array_keys($json); ?>
    
                        <section class="section">
                            <?php foreach ($extras as $extra) { ?>
                                <details>
                                    <summary>
                                        <?php echo strtoupper($extra); ?>
                                    </summary>
                                    <?php $service = $json[$extra]; ?>
                                    <ul>
                                        <?php for ($i = 0; $i < sizeof($service); $i++) { ?>
                                            <li>
                                                Nombre: <?php print_r($service[$i]['name']); ?>
                                            </li>
                                            <li>
                                                Fecha: <?php print_r($service[$i]['date']); ?>
                                            </li>
                                            <li>
                                                Precio: <?php print_r($service[$i]['price']); ?>€
                                            </li>
    
                                            <br>
    
                                            <?php $total_extras += $service[$i]['price']; ?>
                                        <?php } ?>
                                    </ul>
                                </details>
                                <!-- // Esta variable donde se guardan el array de los servicios como por ejemplo guardaran el array que esta dentro de restaurante, luego el de bar, etc. -->
                            <?php } ?>
                        </section>
                        <div>
                            Total: <?php echo $total_extras; ?>€
                        </div>
                    <?php } ?>
                    <form action="/student044/dwes/forms/reservation/form_reservation_extra_insert.php" method="POST">
                        <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']) ?>" hidden>
                        <button type="submit" name="submit" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" fill="white" viewBox="0 0 448 512">
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                            </svg>
                        </button>
                    </form>
                    <!-- Insertar servicio  -->
                </td>
                <td>
                    <?php
                        $total_reservation = $subtotal+$total_extras;
                        echo $total_reservation."€";
                    ?>
                </td>
    
                <td class="d-flex justify-content-center gap-2">
                    <form action="/student044/dwes/forms/reservation/form_reservation_update.php" method="POST" class="miniFormReservationUpdate">
                        <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']); ?>" hidden>
                        <button type="submit" name="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="white" viewBox="0 0 512 512">
                                <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg>
                        </button>
                    </form>
    
                    <form action="/student044/dwes/forms/reservation/form_reservation_delete.php" method="POST">
                        <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']); ?>" hidden>
                        <button type="submit" name="submit" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" fill="white" viewBox="0 0 448 512">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </button>
                    </form>
    
                    <form action="#" method="POST">
                        <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']); ?>" hidden>
                        <button type="submit" name="submit" class="generarFactura">
                            Generar Factura
                        </button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>