<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>
<?php
    if(isset($_POST['submit'])){
        $reservation_id = $_POST["reservation_id"];
        
    }

?>

<form action="/student044/dwes/db/comment/db_comment_customer_insert.php" method="POST">
    <label>Numero de la reserva: </label>
    <input type="text" name="reservation_id" value="<?php echo $reservation_id?>" readonly>
    <label>Escribe tu comentario:  </label>
    <textarea name="comment_content" rows="10" cols="50"></textarea>
    <span>El maximo es de 500</span>
    <input type="number" name="comment_score" min="0" max="10" required>
    <input type="submit" name="submit" value="Dejar comentario">
</form>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

