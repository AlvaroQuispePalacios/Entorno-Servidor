<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<?php
//Comprueba que el usuario este registrado si no lo esta lo manda al form_login
if ($user_id != NULL || $user_id != "") {

    //Conexion a la base de datos
    include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

    $sql = "SELECT * FROM 044_reservation WHERE customer_id = $user_id AND reservation_status != 'CANCELLED'";
    $query = mysqli_query($con, $sql);
    $reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>
<div class="title">Reservas</div>
<div class="px-5">
    <button id="btnReservas">Reservas</button>
    <button id="btnReservasCanceladas">Reservas Canceladas</button>
</div>

<div class="px-5">
    <table class="text-center w-100">
        <thead>
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
        </thead>
        <tbody id="mainReservas">
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
                        $subtotal = $diferencia_dias * $price;
                        echo $subtotal . "€";
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
                    </td>
                    <td>
                        <?php
                        $total_reservation = $subtotal + $total_extras;
                        echo $total_reservation . "€";
                        ?>
                    </td>
                    <td class="d-flex justify-content-center gap-2">
                        <form action="/student044/dwes/db/reservation/db_reservation_cancel_customer.php" method="POST">
                            <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']); ?>" hidden>
                            <button type="submit" name="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="white" viewBox="0 0 512 512">
                                    <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" />
                                </svg>
                                <span>Cancelar</span>
                            </button>
                        </form>
                        <!-- LUEGO PASAR A UN FICHERO SEPARADO Y AGREGARLO CON UN INCLUDE -->
                        <?php if (($reservation['reservation_status']) == "CHECK_OUT") { ?>
                            <form action="/student044/dwes/forms/comment/form_comment_customer_insert.php" method="POST">
                                <button type="submit" name="submit" class="btn btn-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z" />
                                    </svg>
                                    <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']); ?>" hidden>
                                    <span>Dejar comentario</span>
                                </button>
                            </form>
                        <?php }; ?>

                    </td>
                </tr>

            <?php
            }
            ?>

        </tbody>

    </table>

</div>
<br>

<script>
    // Script cuando se presione el boton se mostraran las reservas que esten canceladas
    const btnReservas = document.getElementById("btnReservas");
    const btnReservasCanceladas = document.getElementById("btnReservasCanceladas");
    const mainReservas = document.getElementById("mainReservas");

    function mostrarReservas(estadoReserva) {
        let http = new XMLHttpRequest();
        http.onreadystatechange = () => {
            if (http.readyState == 4 && http.status == 200) {
                console.log(http.responseText);
                mainReservas.innerHTML = http.responseText;
            }
        };
        http.open("GET", "/student044/dwes/db/reservation/ajax_db_reservation_select_customer.php?q=" + estadoReserva, true);
        http.send();
    }

    btnReservas.addEventListener("click", () => {
        mostrarReservas("ALL");
    })
    btnReservasCanceladas.addEventListener("click", () => {
        mostrarReservas("CANCELLED");
    });
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>