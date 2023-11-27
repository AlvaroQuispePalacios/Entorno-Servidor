<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<h3>Crear a un cliente</h3>
<div class="contenedor-form">
    <div class="form">
        <form action="/student044/dwes/db/customer/db_customer_insert.php" method="POST" enctype="multipart/form-data">
            <label for="">Nombre: </label>
            <input type="text" name="customer_name">
    
            <label for="">Apellido: </label>
            <input type="text" name="customer_surname">
    
            <label for="">Telefono: </label>
            <input type="text" name="customer_phone">
    
            <label for="">Email: </label>
            <input type="text" name="customer_email">
    
            <label for="">Contraseña </label>
            <input type="text" name="customer_password">
    
            <label for="">Rol: </label>
            <select name="customer_rol">
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
            </select>
    
            <label for="">Img: </label>
            <input type="file" name="file">
    
            <input type="submit" name="submit" value="Crear cliente">
        </form>

    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>