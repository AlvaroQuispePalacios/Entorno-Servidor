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
                <!-- Agregar un input:radio dos opciones ver reservas, reservas canceladas y con javascript poder hacer que se vean unas o otras -->
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
                    </td>
                    <td>
                        <?php
                            $total_reservation = $subtotal+$total_extras;
                            echo $total_reservation."€";
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
                    </td>
                </tr>
            
        <?php
        }
        ?>
    </table>

</div>
<br>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>