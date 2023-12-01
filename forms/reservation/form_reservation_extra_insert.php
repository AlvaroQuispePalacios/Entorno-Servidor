<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){
        $reservation_id = $_POST['reservation_id'];       

    }
?>
<div>
    <form action="/student044/dwes/db/reservation/db_reservation_extra_insert.php" method="POST">
        <input type="text" name="reservation_id" value="<?php echo $reservation_id?>" hidden>
        <select name="reservation_extra">
            <option value="restaurante">Restaurante</option>
            <option value="bar">Bar</option>
        </select>
        <label>Nombre: </label>
        <input type="text" name="extra_name">
        <span>Si la fecha no es puesta se utilizara la actual</span>
        <label>Fecha: </label>
        <input type="datetime" name="extra_date" placeholder="YY-MM-DD HH-MM-SS">
        <label>Precio: </label>
        <input type="number" name="extra_price" min="0">
        
        <input type="submit" name="submit" value="Agregar extra">

    </form>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>