<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h2>Mostrar todas las reservas</h2>
<div class="contenedor-form">
    <div class="form">
        <form action="/student044/dwes/db/reservation/db_reservation_select.php" method="POST">
            <input type="submit" value="Mostrar" name="submit">
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>