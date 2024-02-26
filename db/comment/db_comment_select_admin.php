<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

    $sql = "SELECT * FROM 044_comment";
    $query = mysqli_query($con, $sql);
    $comments = mysqli_fetch_all($query, MYSQLI_ASSOC);
    print_r($comments);

?>

<h2>Comentarios</h2>


<!-- GET -->
<!-- <form>
    <label for="userId">Id: </label>
    <input type="text" name="userId" placeholder="Introducir el ID del usuario" onkeyup="searchCommentsByUserId(this.value)">
</form> -->
<article class="d-flex flex-wrap gap-3 p-3" id="listCommentsByUserId">
    <?php foreach ($comments as $comment) {?>
        <div class="card-comment-main d-flex flex-column p-3">
            <h2 class="text-center">Comentario</h2>
            <span class="fs-5">Reserva: <?php print_r($comment["reservation_id"])?></span>
            <span class="fs-5">Usuario: <?php print_r($comment["customer_id"])?></span>
            <span class="fs-5">Score: <?php print_r($comment["comment_score"])?></span>
            <span class="fs-5">Creado: <?php print_r($comment["comment_inserted_on"])?></span>
            <span class="fs-5">Estado: <?php print_r($comment["comment_status"])?></span>
            <textarea name="" id="" cols="30" rows="10" readonly><?php print_r($comment["comment_content"])?></textarea>
            <!-- MINIFORM DE ACTUALIZACION -->
            <form action="/student044/dwes/db/comment/db_comment_update.php" method="POST">
                <input type="text" name="$reservation_id" value="<?php print_r($comment["reservation_id"])?>" readonly>
                <input type="text" name="$customer_id" value="<?php print_r($comment["customer_id"])?>" readonly>
                <select name="comment_status">
                    <?php if($comment["comment_status"] == "hidden"){ ?>
                        <option value="hidden" selected>Hidden</option>
                        <option value="public">Public</option>
                        <option value="conflicted">Conflicted</option>
                    <?php }else if($comment["comment_status"] == "public"){ ?>
                        <option value="hidden">Hidden</option>
                        <option value="public" selected>Public</option>
                        <option value="conflicted">Conflicted</option>
                    <?php }else if($comment["comment_status"] == "conflicted"){ ?>
                        <option value="hidden">Hidden</option>
                        <option value="public">Public</option>
                        <option value="conflicted" selected>Conflicted</option>
                    <?php }?>
                </select>
                <input type="submit" value="Actualizar" name="submit">
            </form>
        </div>
    <?php }; ?>
</article>
<script>
    // function searchCommentsByUserId(userId){
    //     console.log(userId);
    //     if(userId.length == 0){
    //         document.getElementById("listCommentsByUserId").innerHTML = "";
    //         return;
    //     }else{
    //         let http = new XMLHttpRequest();
    //         http.onreadystatechange = () =>{
    //             if(http.readyState == 4 && http.status == 200){
    //                 document.getElementById("listCommentsByUserId").innerHTML = http.responseText;
    //                 console.log(http.responseText);
    //             }
    //         };
    //         http.open("GET", "/student044/dwes/db/comment/ajax_comment_select_admin.php?q=" + userId, true);
    //         http.send();
    //     }
    // }
    // function searchCommentsByUserId(userId){
    //     console.log(userId);
    //     if(userId.length == 0){
    //         document.getElementById("listCommentsByUserId").innerHTML = "";
    //         return;
    //     }else{
    //         let http = new XMLHttpRequest();
    //         http.onreadystatechange = () =>{
    //             if(http.readyState == 4 && http.status == 200){
    //                 document.getElementById("listCommentsByUserId").innerHTML = http.responseText;
    //                 console.log(http.responseText);
    //             }
    //         };
    //         http.open("POST", "/student044/dwes/db/comment/ajax_comment_select_admin.php?", true);
    //         http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //         http.send("q=" + userId);
    //     }
    // }
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
