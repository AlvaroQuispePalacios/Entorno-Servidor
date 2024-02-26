<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php
    // if(isset($_POST['submit'])){
    //     $reservation_id = $_POST["reservation_id"];
    // }
?>

<form action="/student044/dwes/db/comment/db_comment_customer_insert.php" method="POST">
    <div class="d-flex flex-column justify-content-center p-5 comment-main">
        <h2 class="comment-title">Comentario</h2>

        <div class="comment-number-reservation">
            <label>Numero de la reserva: </label>
            <input type="text" name="reservation_id" value="<?php echo $reservation_id?>" readonly>
        </div>

        <div>
            <label>Escribe tu comentario:  </label>
            <textarea class="comment-content" name="comment_content" rows="10" cols="50"></textarea>
            <span>El maximo es de 500</span>
        </div>
        <!-- Agregar el sistema de estrellas -->
        <div>
            <input type="number" name="comment_score" required>
        </div>

        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" value="Dejar comentario">
        </div>

    </div>
</form>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>

