<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_select_customer_id.php') ?>

<h2>Eliminar un cliente</h2>
<div class="p-5">
    <div class="contenedor__form">
        <form action="/student044/dwes/db/customer/db_customer_delete.php" method="POST">
            <h4>Datos del cliente</h4>
            <label for="">Identificador: </label>
            <input type="text" name="customer_id" readonly value="<?php echo $customer_id ?>">
    
            <label for="">Nombre: </label>
            <input type="text" readonly value="<?php echo $customer_name ?>">
    
            <label for="">Apellido: </label>
            <input type="text" readonly value="<?php echo $customer_surname ?>">
    
            <label for="">Telefono: </label>
            <input type="text" readonly value="<?php echo $customer_phone ?>">
    
            <label for="">Email: </label>
            <input type="text" readonly value="<?php echo $customer_email ?>">
            <div class="d-flex justify-content-center">
                <input type="submit" name="submit" value="Eliminar permanentemente">
            </div>
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>