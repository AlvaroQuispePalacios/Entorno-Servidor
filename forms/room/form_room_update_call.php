<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<h3>Actualizar habitacion</h3>
<div class="p-5">
    <div class="contenedor__form"">
        <form action=" /student044/dwes/forms/room/form_room_update.php" method="POST">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h4>Identificador habitacion:</h4>
            <input class="w-50" type="number" min="1" name="room_id">
    
            <input type="submit" name="submit" value="Buscar">
            </form>

        </div>

    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>