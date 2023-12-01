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
                $json = json_decode($reservation['reservation_extras'], true);
                $total_bar = 0;
                $total_restaurante = 0;
                $total_extras = 0;
                ?>

                <?php if ($json === null) {
                    echo "Servicios no encontrados";
                } else {
                    
                    $extras = array_keys($json);
                    foreach ($extras as $extra) {
                        echo '<br>' . $extra;
                        // Esta variable donde se guardan el array de los servicios como por ejemplo guardaran el array que esta dentro de restaurante, luego el de bar, etc.
                        $service = $json[$extra];
                        for ($i = 0; $i < sizeof($service); $i++) {
                            echo "<br>";
                            print_r($service[$i]['name']);
                            echo "<br>";
                            print_r($service[$i]['date']);
                            echo "<br>";
                            print_r($service[$i]['price']);
                            echo "€<br>";
                            $total_extras += $service[$i]['price'];
                        }
                    }
                    echo "<br>".$total_extras;
                }
                ?>
                <!-- Insertar servicio  -->
                <form action="/student044/dwes/forms/reservation/form_reservation_extra_insert.php" method="POST">
                    <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id'])?>" hidden>
                    <input type="submit" name="submit" value="Agregar Extra">
                </form>
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