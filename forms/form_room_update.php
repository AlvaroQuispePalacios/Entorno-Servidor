<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/header.php')?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/db/db_select_room_id.php')?>


<h3>Actualizar habitacion</h3>
<form action="/student044/dwes/proyectoHotel/db/db_room_update.php" method="POST">
    <label for="">Identificador de habitacion:</label>
    <input type="text" value="<?php echo $room_id?>" name="room_id" readonly>

    <br>

    <label for="">Categoria: </label>
    <select name="room_category">
        <?php if($room_category == '1'){?>
            <option value="1" selected="selected">Single</option>
            <option value="2">Doble</option>
            <option value="3">Triple</option>
            <option value="4">Suite</option>
        <?php }elseif($room_category == '2'){?>
            <option value="1" >Single</option>
            <option value="2" selected="selected">Doble</option>
            <option value="3">Triple</option>
            <option value="4">Suite</option>
        <?php }elseif ($room_category == '3'){?>
            <option value="1" >Single</option>
            <option value="2" >Doble</option>
            <option value="3" selected="selected">Triple</option>
            <option value="4">Suite</option>
        <?php }else{?>
            <option value="1" >Single</option>
            <option value="2" >Doble</option>
            <option value="3" >Triple</option>
            <option value="4" selected="selected">Suite</option>
        <?php }?>
        </select>
    
    <br>

    <label for="">Estado: </label>
    <select name="room_status">
        <?php if($room_status == 'READY'){?>
            <option value="READY" selected="selected">READY</option>
            <option value="CHECK_IN">CHECK_IN</option>
            <option value="CHEK_OUT">CHECK_OUT</option>
        <?php }elseif($room_category == 'CHECK_IN'){?>
            <option value="READY" >READY</option>
            <option value="CHECK_IN" selected="selected">CHECK_IN</option>
            <option value="CHEK_OUT">CHECK_OUT</option>
        <?php }elseif ($room_category == 'CHECK_OUT'){?>
            <option value="READY" >READY</option>
            <option value="CHECK_IN">CHECK_IN</option>
            <option value="CHEK_OUT" selected="selected">CHECK_OUT</option>
        <?php }?>
    </select>


    <input type="submit" name="submit" value="Actualizar">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/proyectoHotel/footer.php')?>