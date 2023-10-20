<!DOCTYPE html5>
<html lang="es">
    <?php include('./header.php'); ?>

    <!-- Insertar una habitacion -->
    <?php include('./forms/form_room_insert.php') ?>
    <?php include('./db/db_room_insert.php') ?>

    <!-- Mostrar todos los clientes -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/forms/form_customer_select.php')?>
    

    <!-- Insertar un nuevo cliente -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/forms/form_customer_insert.php')?>


    <!-- Actualizar los datos de un cliente -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/forms/form_customer_update_call.php')?>
    
     <!-- Eliminar un cliente -->
     <?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/forms/form_customer_delete_call.php')?>
    
    <?php include('./footer.php'); ?>
</html>