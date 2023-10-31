<!DOCTYPE html5>
<html lang="es">
    <?php include('./header.php'); ?>


    <!-- Insertar una habitacion -->
    <?php include('./forms/form_room_insert.php') ?>
    <?php include('./db/db_room_insert.php') ?>
    
    
    <!-- Eliminar un cliente -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/forms/form_customer_login.php')?>

    <?php include('./footer.php'); ?>

</html>