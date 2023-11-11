<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<?php
    if(isset($_POST['submit'])){
        //Conexion a la base de datos
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_connect.php');

        $sql = "SELECT * FROM 044_reservation";
        $query = mysqli_query($con, $sql);
        $reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);


    }
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
    </tr>

    <?php
        foreach($reservations as $reservation){ 
    ?>
        <tr class="border">
            <td>
                <?php print_r($reservation['reservation_id']);?>
            </td>
            <td>
                <?php print_r($reservation['customer_id']);?>
            </td>
            <td>
                <?php print_r($reservation['room_id']);?>
            </td>
            <td>
                <?php print_r($reservation['reservation_date_in']);?>
            </td>
            <td>
                <?php print_r($reservation['reservation_date_out']);?>
            </td>
            <td>
                <?php print_r($reservation['reservation_price']);?>
            </td>
            <td>
                <?php print_r($reservation['reservation_status']);?>
            </td>
        </tr>
        
    <?php
    } 
    ?>
</table>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>