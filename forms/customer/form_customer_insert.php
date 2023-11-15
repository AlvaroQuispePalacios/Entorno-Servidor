<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h3>Crear a un cliente</h3>
<form action="/student044/dwes/db/customer/db_customer_insert.php" method="POST">
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
    <input type="submit" name="submit" value="Crear cliente">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>