<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<h2>Iniciar Sesion</h2>
<form action="/student044/dwes/proyectoHotel/db/db_customer_login.php" method="POST">
    <label for="">Usuario:</label>
    <input type="text" name="customer_email">
    <br>
    <label for="">Contraseña</label>
    <input type="text" name="pwd">
    <br>
    <input type="submit" name="submit" value="Entrar">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>