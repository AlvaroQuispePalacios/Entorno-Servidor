<!-- Muestra todas las habitaciones -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<h3>Habitaciones</h3>
<div class="contenedor-form">
    <div class="form">
        <form action="/student044/dwes/db/room/db_room_select_customer.php" method="post"> 
            <!-- Agrega dos input de fechas para la fecha de entra y salida, muestra las habitaciones disponibles basado en las fechas de el usuario, cuando muestre las habitaciones en el boton para reservar tendras las fechas, el room_id, y el customer_id(Solo se puede reservar si el usuario ha hecho el login)-->
            <div class="form__date">
                <div class="date date-in">
                    <label for="">Entrada:</label>
                    <input type="date" name="date_in" placeholder="Dia Entrada" required>
                </div>
                <div class="date date-out">
                    <label for="">Salida:</label>
                    <input type="date" name="date_out" placeholder="Dia Salida" required>
                </div>
            </div>
            <div class="submit">
                <input class="btn btn-primary" type="submit" value="Ver" name="submit">
            </div>
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>