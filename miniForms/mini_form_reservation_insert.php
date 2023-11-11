<form action="/student044/dwes/proyectoHotel/db/db_reservation_insert.php" method="POST">
    <input type="hidden" name="room_id"value="<?php print_r($room['room_id'])?>">
    <input type="hidden" name="reservation_date_in" value="<?php echo $date_in?>">
    <input type="hidden" name="reservation_date_out" value="<?php echo $date_out?>">
    <input type="hidden" name="reservation_price" value="<?php print_r($room['room_category_price'])?>">
    <input type="hidden" name="reservation_status" value="BOOKED">
    <input class="btn btn-success" type="submit" name="submit" value="Reservar">
</form>