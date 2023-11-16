<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_select_reservation_id.php')?>

<h2>Eliminar reservas</h2>

<form action="/student044/dwes/db/reservation/db_reservation_delete.php" method="post">
    <label>Reserva ID: </label>
    <input type="text" value="<?php echo $reservation_id;?>" name="reservation_id" readonly>
    <br>
    <label>Cliente ID: </label>
    <input type="text" value="<?php echo $customer_id?>" readonly>
    <br>
    <label>Habitacion ID: </label>
    <input type="text" value="<?php echo $room_id?>" readonly>
    <br>
    <label>Fecha entrada: </label>
    <input type="date" value="<?php echo $reservation_date_in?>" readonly>
    <br>
    <label>Fecha salida: </label>
    <input type="date" value="<?php echo $reservation_date_out?>" readonly>
    <br>
    <label>Precio por noche: </label>
    <input type="text" value="<?php echo $reservation_price."€";?>" readonly>
    <br>
    <label>Estado de la reserva: </label>
    <input type="text" value="<?php echo $reservation_status?>">
    <br>
    <input type="submit" value="Eliminar" name="submit">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>