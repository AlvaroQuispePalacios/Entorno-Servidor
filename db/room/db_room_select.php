<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<?php


//Comprueba que las fechas no esten vacias(0000-00-00) y que la fecha de entrada sea menor que la fecha de salida
//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');


$sql_available = "SELECT room_id, room_category_name, room_category_price, room_category_description, room_category_img FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id WHERE room_id NOT IN (SELECT 044_reservation.room_id FROM 044_reservation) ORDER BY room_id";
$query_available = mysqli_query($con, $sql_available);
$rooms_available = mysqli_fetch_all($query_available, MYSQLI_ASSOC);

$sql = "SELECT room_id, room_category_name, room_category_price, room_category_description, room_category_img FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id ORDER BY room_id";
$query = mysqli_query($con, $sql);
$rooms = mysqli_fetch_all($query, MYSQLI_ASSOC); //Utilizando MYSQLI_ASSOC se puede utilizar para el nombre de la 

mysqli_close($con);

?>

<h2 class="d-flex justify-content-start p-3 titleRooms"></h2>

<div class="d-flex justify-content-center gap-5 ">
    <div>
        <input type="radio" name="rooms" id="rooms" checked>
        <label for="rooms">All the rooms</label>
    </div>
    <div>
        <input type="radio" name="rooms" id="roomsAvailable">
        <label for="roomsAvailable">Rooms available</label>
    </div>
</div>

<div id="containerRooms">
    <section class="d-flex flex-wrap justify-content-center">
    
        <?php
        foreach ($rooms as $room) {
        ?>
    
            <div class="card m-2" style="width: 18rem;">
    
                <p class="fs-5 text-center mt-2"><?php print_r($room['room_id']) ?></p>
                <img src="<?php print_r($room['room_category_img']) ?>" class="card-img-top" alt="Room Img">
    
                <h5 class="card-title m-2"><?php print_r($room['room_category_name']) ?></h5>
    
                <h6 class="card-subtitle m-2 mt-0 text-body-secondary"><?php print_r($room['room_category_price']) ?>€ por noche</h6>
    
                <div class="card-body p-3 pt-1">
                    <p class="card-text"><?php print_r($room['room_category_description']) ?></p>
                </div>
            </div>
    
        <?php
        }
        ?>
    </section>
</div>

<div id="containerRoomsAvailable">
    <section class="d-flex flex-wrap justify-content-center">

        <?php
        foreach ($rooms_available as $room_available) {
        ?>

            <div class="card m-2" style="width: 18rem;">
                <p class="fs-5 text-center mt-2"><?php print_r($room_available['room_id']) ?></p>

                <img src="<?php print_r($room_available['room_category_img']) ?>" class="card-img-top" alt="Room Img">

                <h5 class="card-title m-2"><?php print_r($room_available['room_category_name']) ?></h5>

                <h6 class="card-subtitle m-2 mt-0 text-body-secondary"><?php print_r($room_available['room_category_price']) ?>€ por noche</h6>

                <div class="card-body p-3 pt-1">
                    <p class="card-text"><?php print_r($room['room_category_description']) ?></p>
                </div>
            </div>

        <?php
        }
        ?>
    </section>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>