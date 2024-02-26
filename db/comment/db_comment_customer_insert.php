<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php
function validateInput($input)
{
    return htmlspecialchars($input);
}
?>

<?php
if (isset($_POST['submit'])) {
    $reservation_id = validateInput($_POST["reservation_id"]);
    $comment_content = validateInput($_POST["comment_content"]);
    $comment_score = validateInput($_POST["comment_score"]);

    //Conexion a la base de datos
    include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

    $sql = "INSERT INTO 044_comment (reservation_id, customer_id, comment_content, comment_score, comment_inserted_on, comment_status) VALUES 
    ('$reservation_id', '$user_id', '$comment_content', $comment_score, DEFAULT, 'hidden')";

    $query = mysqli_query($con, $sql);

    if($query){
        echo "Comentario subido con exito";
    }else{
        echo "Ha ocurrido un error al subir el comentario";
    }
}
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
