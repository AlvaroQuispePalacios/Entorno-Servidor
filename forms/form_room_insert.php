<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<form action="/student044/dwes/proyectoHotel/db/db_room_insert.php" method="POST">
    <label for="">Categoria de la habitacion</label>
    <select name="room_category">
        <option value="1">Single</option>
        <option value="2">Double</option>
        <option value="3">Triple</option>
        <option value="4">Suite</option>
    </select>
    <input type="submit" name="submit" value="Insertar habitacion">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>