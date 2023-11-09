<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<h3>Actualizar habitacion</h3>
<form action="/student044/dwes/proyectoHotel/forms/form_customer_update.php" method="POST">

    <label for="">Identificador habitacion:</label>
    <input type="number" min="1" name="room_id">

    <!-- <label for="">Categoria habitacion</label>
    <select name="room_category">
        <option value="1">Single</option>
        <option value="2">Doble</option>
        <option value="3">Triple</option>
        <option value="4">Suite</option>
    </select>

    <label for="">Estado Habitacion</label>
    <select name="room_status">
        <option value="READY">Ready</option>
        <option value="CHECK_IN">Check-in</option>
        <option value="CHECK_OUT">Check-out</option>
    </select> -->

    <input type="submit" name="submit" value="Actualizar">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>