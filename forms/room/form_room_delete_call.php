<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h2>Eliminar una habitacion</h2>
<div class="p-5">
    <div class="contenedor__form">
        <form action="/student044/dwes/forms/room/form_room_delete.php" method="POST">
            <div class="d-flex flex-column justify-content-center align-items-center">

                
                <label>Identificador habitacion:</label>
                <input class="w-50" type="number" min="1" name="room_id">
                <input type="submit" value="Buscar" name="submit">
            </div>
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>