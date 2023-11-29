<!-- <form action="/student044/dwes/forms/reservation/form_reservation_update.php" method="POST" class="miniFormReservationUpdate">
    <input type="text" name="reservation_id" value="<?php print_r($reservation['reservation_id']); ?>" hidden>
    <input class="btn btn-primary" type="submit" name="submit" value="Modificar">
</form> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#miniFormReservationUpdate">
  Update
</button>

<!-- Modal -->
<div class="modal fade" id="miniFormReservationUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
            <?php if($reservation['reservation_status'] == 'BOOKED') {?>
                    <option value="BOOKED" selected="selected">BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation['reservation_status'] == 'CHECK_IN') {?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN" selected="selected">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation['reservation_status'] == 'CHECK_OUT'){?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT" selected="selected">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation['reservation_status'] == 'CANCELLED') {?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED"  selected="selected">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation['reservation_status'] == 'ABSENT'){?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT"  selected="selected">ABSENT</option>
                <?php }?>
            </select>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <input type="submit" class="btn btn-primary" value="Guardar cambios" name="submit"></input>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


