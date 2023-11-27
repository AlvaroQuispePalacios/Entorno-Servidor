<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h3>Actualizar datos de un cliente</h3>
<div class="contenedor-form">
    <div class="form">
        <form action="/student044/dwes/forms/customer/form_customer_update.php" method="POST">
            <label for="">Identificador:</label>
            <input type="number" min="0" name="customer_id">
            <input type="submit" name="submit" value="Actualizar">
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>