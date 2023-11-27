<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_select_room_id.php')?>

<h3>Actualizar habitacion</h3>
<div class="contenedor-form">
    <div class="form">

        <form action="/student044/dwes/db/room/db_room_update.php" method="POST">
            <label for="">Identificador de habitacion:</label>
            <input type="text" value="<?php echo $room_id?>" name="room_id" readonly>
        
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
            
            <label for="">Estado: </label>
            <select name="room_status">
                <?php if($room_status == 'READY'){?>
        
                    <option value="READY" selected="selected">READY</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHEK_OUT">CHECK_OUT</option>
        
                <?php }elseif($room_status == 'CHECK_IN'){?>
        
                    <option value="READY" >READY</option>
                    <option value="CHECK_IN" selected="selected">CHECK_IN</option>
                    <option value="CHEK_OUT">CHECK_OUT</option>
        
                <?php }elseif ($room_status == 'CHECK_OUT'){?>
        
                    <option value="READY" >READY</option>
                    <option value="CHECK_IN">CHECK_IN</option>
                    <option value="CHEK_OUT" selected="selected">CHECK_OUT</option>
        
                <?php }?>
            </select>
        
        
            <input type="submit" name="submit" value="Actualizar">
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>