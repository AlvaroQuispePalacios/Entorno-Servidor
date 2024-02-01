<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

//Conexion a la base de datos
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT * FROM 044_reservation";
$query = mysqli_query($con, $sql);
$reservations = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<div class="title">Reservas</div>


<div>
    <input type="text" onkeyup="searchForId(this.value)">
    <div id="showReservation">

    </div>
</div>
<script>
        function searchForId(userId) {
        if (userId.length == 0) {
            document.getElementById("showReservation").innerHTML = "";
            return;
        } else {
            let http = new XMLHttpRequest();
            http.onreadystatechange = () => {
                if (http.readyState == 4 && http.status == 200) {
                    document.getElementById("showReservation").innerHTML = http.responseText;
                    console.log(http.responseText);
                }
            };
            http.open("POST", "/student044/dwes/db/reservation/ajax_db_reservation_select.php", true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send("variable="+ userId);
        }
    }
</script>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>