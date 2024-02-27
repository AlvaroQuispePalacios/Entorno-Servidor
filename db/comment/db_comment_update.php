<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<?php
    if(isset($_POST['submit'])){

        include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');

        $reservation_id = $_POST["reservation_id"];
        $customer_id = $_POST["customer_id"];
        $comment_status = $_POST["comment_status"];
        
        $sql = "UPDATE 044_comment SET comment_status = '$comment_status' WHERE reservation_id = '$reservation_id' AND customer_id = '$customer_id'";
        $query = mysqli_query($con, $sql);
        
        if($query){
            echo "Comentario actualizado con exito";
        }else{
            echo "Ha ocurrido un error";
        }
    }
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
