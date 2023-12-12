<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<?php
//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql_reservation = "SELECT reservation_id FROM 044_reservation ORDER BY reservation_id DESC LIMIT 1";
$query_reservation = mysqli_query($con, $sql_reservation);
$reservation = mysqli_fetch_all($query_reservation, MYSQLI_NUM);
$reservation_number = $reservation[0][0]+1;
//Buscar infomacion(SELECT)
$sql_customer = ("SELECT * FROM 044_customer");
$query_customer = mysqli_query($con, $sql_customer);
$customers = mysqli_fetch_all($query_customer, MYSQLI_ASSOC);




$sql_room = ("SELECT * FROM 044_room INNER JOIN 044_room_category ON 044_room.room_category = 044_room_category.room_category_id");
$query_room = mysqli_query($con, $sql_room);
$rooms = mysqli_fetch_all($query_room, MYSQLI_ASSOC);

$rooms_js = json_encode($rooms);

mysqli_close($con);
?>

<h2>Nueva reserva</h2>
<div class="p-5">
    <div class="contenedor__form">

        <form action="/student044/dwes/forms/reservation/form_reservation_insert.php" method="POST">
            <h4 class="text-center">Datos de la reserva</h4>
            <div class="d-flex flex-column justify-content-center align-items-center">

                <label>Usuario ID:</label>
                <select class="w-50 p-2" name="customer_id" id="formReservationInsertCustomerId" required>
                    <option value="">Elige un usuario</option>
                    <?php foreach ($customers as $customer) { ?>
                        <option value="<?php print_r($customer['customer_id']) ?>"><?php print_r($customer['customer_id']) ?></option>
                    <?php } ?>
                </select>
            
                <!-- <label>Room ID:</label> -->
                <!-- <select class="w-50 p-2" name="room_id" id="formReservationInsertRoomId" hidden>
                    <option value="">Elige una habitacion</option>
                    <?php foreach ($rooms as $room) { ?>
                        <option value="<?php print_r($room['room_id']) ?>" ><?php print_r($room['room_id']) ?>-<?php print_r($room['room_category_name']) ?></option>
                    <?php } ?>
                </select> -->
                
                <label>Date In:</label>
                <input class="w-50" type="date" name="reservation_date_in" id="formReservationInsertDateIn" required>
            
                <label>Date Out:</label>
                <input class="w-50" type="date" name="reservation_date_out" id="formReservationInsertDateOut" required>
            
                <input type="submit" name="submit" value="Buscar Habitaciones">
            </div>
        </form>
    </div>
    <br>
    <!-- <h4>Preview</h4> -->
    <!-- <table class="table" id="formReservationInsertPreview">
        <thead>
            <tr>
                <th scope="col">Reservation ID</th>
                <th scope="col">Customer ID</th>
                <th scope="col">Room ID</th>
                <th scope="col">Room Category</th>
                <th scope="col">Date In</th>
                <th scope="col">Date Out</th>
                <th scope="col">Price/Night</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $reservation_number?></th>
                <td id="formReservationInsertPreviewCustomerId"></td>
                <td id="formReservationInsertPreviewRoomId"></td>
                <td id="formReservationInsertPreviewRoomCategory"></td>
                <td id="formReservationInsertPreviewDateIn"></td>
                <td id="formReservationInsertPreviewDateOut"></td>
                <td id="formReservationInsertPreviewPrice"></td>
                <td id="formReservationInsertPreviewTotal"></td>
            </tr>

        </tbody>
    </table> -->
    <!-- <div class="d-flex justify-content-center">
        <small>El precio total estimado <b>no cuenta los extras</b></small>
    </div> -->
</div>
<!-- <script src="http://momentjs.com/downloads/moment.min.js"></script>
<script>
    // Room
    const formReservationInsertRoomId = document.getElementById('formReservationInsertRoomId');
    const formReservationInsertPreviewRoomId = document.getElementById('formReservationInsertPreviewRoomId');
    //Room category 
    const formReservationInsertPreviewRoomCategory = document.getElementById('formReservationInsertPreviewRoomCategory');
    // Price
    const formReservationInsertPreviewPrice = document.getElementById('formReservationInsertPreviewPrice');
    // Date in
    const formReservationInsertDateIn = document.getElementById('formReservationInsertDateIn');
    const formReservationInsertPreviewDateIn = document.getElementById('formReservationInsertPreviewDateIn');
    // Date out
    const formReservationInsertDateOut = document.getElementById('formReservationInsertDateOut');
    const formReservationInsertPreviewDateOut = document.getElementById('formReservationInsertPreviewDateOut');
    // Total
    const formReservationInsertPreviewTotal = document.getElementById('formReservationInsertPreviewTotal');


    formReservationInsertRoomId.addEventListener('change', (e) => {
        formReservationInsertPreviewRoomId.textContent = e.target.value;

        let rooms = <?php print_r($rooms_js) ?>;
        rooms.forEach((room) => {
            if (room.room_id == e.target.value) {
                let roomCategoryName = room.room_category_name;
                let roomCategoryPrice = room.room_category_price;

                formReservationInsertPreviewRoomCategory.textContent = roomCategoryName;
                formReservationInsertPreviewPrice.textContent = roomCategoryPrice;
                calcularTotal();
            }
        });
    });

    formReservationInsertDateIn.addEventListener('change', (e) => {
        formReservationInsertPreviewDateIn.textContent = e.target.value;
        calcularTotal();
    });

    formReservationInsertDateOut.addEventListener('change', (e) => {
        formReservationInsertPreviewDateOut.textContent = e.target.value;
        calcularTotal();
    });

    function calcularTotal(){
        if ((formReservationInsertPreviewDateOut.textContent != null || formReservationInsertPreviewDateOut.textContent != '') &&
            (formReservationInsertPreviewDateIn.textContent != null || formReservationInsertPreviewDateIn.textContent != '') &&
            (formReservationInsertPreviewPrice.textContent != null || formReservationInsertPreviewPrice.textContent != '')) {
            
            let dateIn = moment(formReservationInsertPreviewDateIn.textContent);
            let dateOut = moment(formReservationInsertPreviewDateOut.textContent);
            let price = +formReservationInsertPreviewPrice.textContent;
            let diffDates = dateOut.diff(dateIn, 'days');
            let total = (diffDates * price).toFixed(2);

            if(total <= 0 || isNaN(total)){
                formReservationInsertPreviewTotal.textContent = '';
            }else{
                formReservationInsertPreviewTotal.textContent = `${total}€`;

            }
        }
    }
</script> -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>