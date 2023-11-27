<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<!-- Busca los datos del cliente en base a su id -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_select_customer_id.php')?>

<?php echo $customer_id;?>

<h3>Actualizar datos del cliente</h3>

<form action="/student044/dwes/db/customer/db_customer_update.php" method="POST">
    <label for="">Identificador: </label>
    <input type="text" name="customer_id" readonly value="<?php echo $customer_id?>">
    <br>
    <label for="">Nombre: </label>
    <input type="text" name="customer_name" value="<?php echo $customer_name?>">
    <br>
    <label for="">Apellido: </label>
    <input type="text" name="customer_surname" value="<?php echo $customer_surname?>">
    <br>
    <label for="">Telefono: </label>
    <input type="text" name="customer_phone" value="<?php echo $customer_phone?>">
    <br>
    <label for="">Email: </label>
    <input type="text" name="customer_email" value="<?php echo $customer_email?>">
    <br>
    <label for="">Contraseña: </label>
    <input type="text" name="customer_password" value="<?php echo $customer_password?>">
    <br>
    <select name="customer_rol">
        <?php if($customer_rol == 'customer') {?>
            <option value="customer" selected="selected">Customer</option>
            <option value="admin">Admin</option>
        <?php } elseif($customer_rol == 'admin') {?>
            <option value="customer">Customer</option>
            <option value="admin" selected="selected">Admin</option>
        <?php }?>
    </select>
    <input type="submit" name="submit" value="Actualizar">
</form>


<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>