<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/header.php')?>

<?php
    //Conexion a la base de datos
    include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');

    $sql = "SELECT * FROM 044_room_category";
    $query = mysqli_query($con, $sql);
    $rooms_category = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<div style="padding: 3rem;">
    <h2>Categorias</h2>
    <table>
        <tr>
            <th>Categoria ID</th>
            <th>Nombre Categoria</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Imagen</th>
        </tr>
    
        <?php foreach($rooms_category as $room_category){ ?>
            <tr>
                <td><?php print_r($room_category['room_category_id'])?></td>
                <td><?php print_r($room_category['room_category_name'])?></td>
                <td><?php print_r($room_category['room_category_price'])?></td>
                <td><?php print_r($room_category['room_category_description'])?></td>
                <td>
                    <img src="<?php print_r($room_category['room_category_img'])?>" alt="imagen" width="200px">
                </td>
            </tr>
        <?php }?>
    
    </table>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/footer.php')?>