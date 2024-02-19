<!-- Boton que toma los datos del usuario, habitacion y hace la reserva  -->
<form action="/student044/dwes/db/reservation/db_reservation_insert_customer.php" method="POST">
    <h5 class="text-start">Extra</h5>

    <div class="d-flex extra-reservation">
        <p class="m-0 w-80">WiFi7 - 11€</p>
        <input type="checkbox" name="extra_reservation[]" value="wifi" style="width: 5rem;">
    </div>

    <div class="d-flex extra-reservation">
        <p class="m-0 w-80">Minibar - 22€</p>
        <input type="checkbox" name="extra_reservation[]" value="minibar" style="width: 5rem;">
    </div>

    <input type="hidden" name="room_id" value="<?php print_r($room['room_id']) ?>">
    <input type="hidden" name="reservation_date_in" value="<?php echo $date_in ?>">
    <input type="hidden" name="reservation_date_out" value="<?php echo $date_out ?>">
    <input type="hidden" name="reservation_price" value="<?php print_r($room['room_category_price']) ?>">
    <input type="hidden" name="reservation_status" value="BOOKED">
    <input class="btn btn-success" type="submit" name="submit" value="Reservar">
</form>