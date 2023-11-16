<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    if(isset($_POST['submit'])){
        $reservation_id = $_POST['reservation_id'];
        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');
        $sql = "DELETE FROM 044_reservation WHERE reservation_id = '$reservation_id'";
        $query = mysqli_query($con, $sql);

        if($query){
            echo "Reserva eliminada con exito";
        }else{
            echo "Error al eliminar la reserva";
        }
    }
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>