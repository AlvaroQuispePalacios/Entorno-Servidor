<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_select_customer_id.php')?>

<h2>Eliminar un cliente</h2>
<form action="/student044/dwes/proyectoHotel/db/db_customer_delete.php" method="POST">
    <h4>Datos del cliente</h4>
    <label for="">Identificador: </label>
    <input type="text" name="customer_id" readonly value="<?php echo $customer_id?>">
    <br>
    <label for="">Nombre: </label>
    <input type="text"  readonly value="<?php echo $customer_name?>">
    <br>
    <label for="">Apellido: </label>
    <input type="text" readonly value="<?php echo $customer_surname?>">
    <br>
    <label for="">Telefono: </label>
    <input type="text"  readonly value="<?php echo $customer_phone?>">
    <br>
    <label for="">Email: </label>
    <input type="text"  readonly value="<?php echo $customer_email?>">
    <br>
    <input type="submit" name="submit" value="Eliminar permanentemente">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>