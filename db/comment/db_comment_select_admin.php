<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<h2>Comentarios</h2>
<!-- GET -->
<form>
    <label for="userId">Id: </label>
    <input type="text" name="userId" placeholder="Introducir el ID del usuario" onkeyup="searchCommentsByUserId(this.value)">
</form>
<article id="listCommentsByUserId">

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
    function searchCommentsByUserId(userId){
        console.log(userId);
        if(userId.length == 0){
            document.getElementById("listCommentsByUserId").innerHTML = "";
            return;
        }else{
            let http = new XMLHttpRequest();
            http.onreadystatechange = () =>{
                if(http.readyState == 4 && http.status == 200){
                    document.getElementById("listCommentsByUserId").innerHTML = http.responseText;
                    console.log(http.responseText);
                }
            };
            http.open("POST", "/student044/dwes/db/comment/ajax_comment_select_admin.php?", true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send("q=" + userId);
        }
    }
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
