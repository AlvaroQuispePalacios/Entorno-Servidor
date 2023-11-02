<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<h3>Eliminar un cliente</h3>
<form action="./student044/dwes/proyectoHotel/forms/form_customer_delete.php" method="POST">
    <label for="">Identificador:</label>
    <input type="number" min="0" name="customer_id">
    <input type="submit" name="submit" value="Eliminar">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>