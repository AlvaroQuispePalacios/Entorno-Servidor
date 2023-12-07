<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<!-- Busca los datos del cliente en base a su id -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_select_customer_id.php')?>


<h3>Actualizar datos del cliente</h3>
<div class="p-5">
    <div class="contenedor__form">
        <form action="/student044/dwes/db/customer/db_customer_update.php" method="POST"  enctype="multipart/form-data">
        <h4>Datos del cliente</h4>
            <label for="">Identificador: </label>
            <input type="text" name="customer_id" readonly value="<?php echo $customer_id?>">
            
            <label for="">Nombre: </label>
            <input type="text" name="customer_name" value="<?php echo $customer_name?>">
            
            <label for="">Apellido: </label>
            <input type="text" name="customer_surname" value="<?php echo $customer_surname?>">
            
            <label for="">Telefono: </label>
            <input type="text" name="customer_phone" value="<?php echo $customer_phone?>">
            
            <label for="">Email: </label>
            <input type="text" name="customer_email" value="<?php echo $customer_email?>">
            
            <label for="">Contraseña: </label>
            <input type="text" name="customer_password" value="<?php echo $customer_password?>">
            
            <label for="">Rol: </label>
            <select name="customer_rol">
                <?php if($customer_rol == 'customer') {?>
                    <option value="customer" selected="selected">Customer</option>
                    <option value="admin">Admin</option>
                <?php } elseif($customer_rol == 'admin') {?>
                    <option value="customer">Customer</option>
                    <option value="admin" selected="selected">Admin</option>
                <?php }?>
            </select>
            <!-- Con javaScript puedes mostrar una previsualisacion de la imagen(RECUERDA HACERLO) -->
            <label for="">Image: </label>
            <input type="file" name="file"> 
            <div class="d-flex justify-content-center">

                <input type="submit" name="submit" value="Actualizar">
            </div>
        </form>

    </div>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>