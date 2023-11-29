<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_select_reservation_id.php')?>

<h2>Actualizar Reservas</h2>

<div class="contenedor-form">
    <div class="form">

        <form action="/student044/dwes/db/reservation/db_reservation_update.php" method="post">
            <label for="">Reserva ID: </label>
            <input type="text" value="<?php echo $reservation_id;?>" readonly name="reservation_id">
        
            <label for="">Cliente ID: </label>
            <input type="text" value="<?php echo $customer_id;?>" name="customer_id">
        
            <label for="">Habitacion ID: </label>
            <input type="text" value="<?php echo $room_id;?>" name="room_id">
        
            <!--RECUERDA una habitacion puede tener mas de una reserva  
                
            - Agrega una condicion para cuando quieras extender o acortar las fechas para no tener errores con otras reservas que puedan tener la misma habitacion -->
        
            <label for="">Fecha entrada: </label>
            <input type="date" value="<?php echo $reservation_date_in?>" name="reservation_date_in"">
        
            <label for="">Fecha salida: </label>
            <input type="date" value="<?php echo $reservation_date_out?>" name="reservation_date_out"">
        
            <label for="">Precio por noche: </label>
            <input type="text" value="<?php echo $reservation_price;?>" name="reservation_price">
        
            <label for="">Status de la habitacion</label>
            <select name="reservation_status">
                <?php if($reservation_status == 'BOOKED') {?>
                    <option value="BOOKED" selected="selected">BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation_status == 'CHECK_IN') {?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN" selected="selected">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation_status == 'CHECK_OUT'){?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT" selected="selected">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation_status == 'CANCELLED') {?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED"  selected="selected">CANCELLED</option>
                    <option value="ABSENT">ABSENT</option>
                <?php } elseif($reservation_status == 'ABSENT'){?>
                    <option value="BOOKED" >BOOKED</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHECK_OUT">CHECK_OUT</option>
                    <option value="CANCELLED">CANCELLED</option>
                    <option value="ABSENT"  selected="selected">ABSENT</option>
                <?php }?>
                
            </select>
            
            <input type="submit" value="Actualizar" name="submit">
        
        </form>
    </div>

</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>