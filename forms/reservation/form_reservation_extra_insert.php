<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){
        $reservation_id = $_POST['reservation_id'];       

    }
?>

<!-- Para poder utlizar el checkbox => name="extraHabitacion[]" , asi guardamos los valores elegidos en el checkbox -->
<div class="p-5">
    <h2>Extras</h2>
    <form action="/student044/dwes/db/reservation/db_reservation_extra_insert.php" method="POST">
        <div class="contenedor__form d-flex flex-column align-items-center">
            <h4>Datos Extra</h4>
            <input type="text" name="reservation_id" value="<?php echo $reservation_id?>" hidden>
            <!-- Hubiera sido mejor llamarlo services -->
            <select class="w-50 p-2" name="reservation_extra" >
                <option value="restaurante">Restaurante</option>
                <option value="bar">Bar</option>
                <option value="spa">Spa</option>
            </select>
            <label>Nombre: </label>
            <input class="w-50" type="text" name="extra_name">
            <label>Fecha: </label>
            <!-- <span>Si la fecha no es puesta se utilizara la actual</span> -->
            <input class="w-50" type="datetime" name="extra_date" placeholder="YY-MM-DD HH-MM-SS">
            <label>Precio: </label>
            <input class="w-50" type="number" name="extra_price" step=0.01>
            
        </div>
        

    </form>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>