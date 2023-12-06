<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<h3>Eliminar un cliente</h3>
<div class="p-5">
    <div class="contenedor__form">
        <form action="/student044/dwes/forms/customer/form_customer_delete.php" method="POST">
            
            <div class="d-flex justify-content-center flex-column align-items-center">
                <label  for="">Identificador:</label>
                <input class="w-50" type="number" min="0" name="customer_id">
                <input type="submit" name="submit" value="Eliminar">
            </div>
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>