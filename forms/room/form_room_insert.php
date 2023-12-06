<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<div class="p-5">
    <div class="contenedor__form">
        <form action="/student044/dwes/db/room/db_room_insert.php" method="POST">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h4>Categoria de la Habitacion</h4>
                <select class="w-50 p-2" name="room_category">
                    <option value="1">Single</option>
                    <option value="2">Double</option>
                    <option value="3">Triple</option>
                    <option value="4">Suite</option>
                </select>
                <input class="mt-2" type="submit" name="submit" value="Insertar habitacion">
            </div>
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>