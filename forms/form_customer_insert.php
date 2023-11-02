<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>
<h3>Crear a un cliente</h3>
<form action="./db/db_customer_insert.php" method="POST">
    <label for="">Nombre: </label>
    <input type="text" name="customer_name">
    <br>
    <label for="">Apellido: </label>
    <input type="text" name="customer_surname">
    <br>
    <label for="">Telefono: </label>
    <input type="text" name="customer_phone">
    <br>
    <label for="">Email: </label>
    <input type="text" name="customer_email">
    <br>
    <input type="submit" name="insert_customer" value="Crear cliente">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>