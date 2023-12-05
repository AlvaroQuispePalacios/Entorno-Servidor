<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<?php
//Comprueba que el usuario este registrado si no lo esta lo manda al form_login
if ($user_id != NULL || $user_id != "") {

    //Conexion a la base de datos
    include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

    $sql = "SELECT * FROM 044_reservation WHERE customer_id = $user_id";
    $query = mysqli_query($con, $sql);
    $reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>
<div class="title">Reservas</div>
<table class="text-center w-100">
    <tr>
        <th>Reservation ID</th>
        <th>Customer ID</th>
        <th>Room ID</th>
        <th>Date in</th>
        <th>Date out</th>
        <th>Reservation Price</th>
        <th>Subtotal Reservation</th>
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
                <!-- <form action="/student044/dwes/forms/reservation/form_reservation_extra_insert.php" method="POST">
                    <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']) ?>" hidden>
                    <button type="submit" name="submit" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" fill="white" viewBox="0 0 448 512">
                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                    </button>
                </form> -->
                <!-- Insertar servicio  -->
            </td>
            <td class="d-flex justify-content-center gap-2">
                <form action="/student044/dwes/forms/reservation/form_reservation_delete.php" method="POST">
                    <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']); ?>" hidden>
                    <button type="submit" name="submit" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="white" viewBox="0 0 512 512">
                            <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" />
                        </svg>
                        <span>Cancelar</span>
                    </button>
                </form>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>