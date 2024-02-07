<?php
// $q = $_GET["q"];
$q = $_POST["q"];
include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/db/db_connect.php');

$sql = "SELECT * FROM 044_comment WHERE customer_id = $q";
$query = mysqli_query($con, $sql);
$comments = mysqli_fetch_all($query, MYSQLI_ASSOC);

// print_r($comments);


?>

<table class="text-center w-100">
    <tr>
        <th>Reservation ID</th>
        <th>Customer ID</th>
        <th>Comment Content</th>
        <th>Comment Score</th>
        <th>Date Insert</th>
        <th>Comment Status</th>
        <th>Actions</th>
    </tr>

    <?php foreach($comments as $comment){ ?>
        <tr>
            <td><?php print_r($comment["reservation_id"])?></td>
            <td><?php print_r($comment["customer_id"])?></td>
            <td><?php print_r($comment["comment_content"])?></td>
            <td><?php print_r($comment["comment_score"])?></td>
            <td><?php print_r($comment["comment_inserted_on"])?></td>
            <td><?php print_r($comment["comment_status"])?></td>
            <td>
                <button>Cambiar estado</button>
            </td>
        </tr>
    <?php }?>
</table>