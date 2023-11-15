<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h2>Mostrar todas las reservas</h2>
<form action="/student044/dwes/db/reservation/db_reservation_select.php" method="POST">
    <input type="submit" value="Mostrar" name="submit">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>