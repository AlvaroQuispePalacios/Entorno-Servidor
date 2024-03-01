<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT co.customer_id, co.comment_content, co.comment_score, co.comment_inserted_on,cu.customer_name, cu.customer_surname, cu.customer_img FROM `044_comment` AS co 
    INNER JOIN `044_customer` AS cu on co.customer_id = cu.customer_id
    WHERE co.comment_status = 'public' AND co.comment_score >= 3 
    LIMIT 3";

$query = mysqli_query($con, $sql);
$comments = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<?php foreach ($comments as $comment) { ?>
    <article class="d-flex flex-column card-commnet-index">
        <section class="d-flex gap-3">
            <div style="width: 50px; height: 50px">
                <img src="<?php echo $comment["customer_img"];?>" alt="imgUser" class="w-100 rounded-circle h-100">
            </div>
            <div class="d-flex flex-column">
                <span class="fw-bold"><?php echo $comment["customer_name"]. " " . $comment["customer_surname"];?></span>
                <span class="fw-light"><?php echo $comment["comment_inserted_on"];?></span>
            </div>
        </section>
        <hr>
        <section>
            <?php echo $comment["comment_score"];?>
        </section>
        <hr>
        <section>
            <?php echo $comment["comment_content"];?>
        </section>
    </article>
<?php } ?>