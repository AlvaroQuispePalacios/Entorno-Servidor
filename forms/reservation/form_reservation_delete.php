<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_select_reservation_id.php') ?>

<h2>Eliminar reservas</h2>
<div class="contenedor-form">
    <div class="form">
        <form action="/student044/dwes/db/reservation/db_reservation_delete.php" method="post">
            <label>Reserva ID: </label>
            <input type="text" value="<?php echo $reservation_id; ?>" name="reservation_id" readonly>
    
            <label>Cliente ID: </label>
            <input type="text" value="<?php echo $customer_id ?>" readonly>
    
            <label>Habitacion ID: </label>
            <input type="text" value="<?php echo $room_id ?>" readonly>
    
            <label>Fecha entrada: </label>
            <input type="date" value="<?php echo $reservation_date_in ?>" readonly>
    
            <label>Fecha salida: </label>
            <input type="date" value="<?php echo $reservation_date_out ?>" readonly>
    
            <label>Precio por noche: </label>
            <input type="text" value="<?php echo $reservation_price . "€"; ?>" readonly>
    
            <label>Estado de la reserva: </label>
            <input type="text" value="<?php echo $reservation_status ?>">
    
            <input type="submit" value="Eliminar" name="submit">
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>