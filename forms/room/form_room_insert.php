<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<div class="contenedor-form">
    <div class="form">
        <form action="/student044/dwes/db/room/db_room_insert.php" method="POST">
            <label for="">Categoria de la habitacion</label>
            <select name="room_category">
                <option value="1">Single</option>
                <option value="2">Double</option>
                <option value="3">Triple</option>
                <option value="4">Suite</option>
            </select>
            <input type="submit" name="submit" value="Insertar habitacion">
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>