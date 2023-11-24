
<?php
    if(isset($_POST['submit'])){
        $room_category_name = $_POST['room_category_name'];
        $room_category_price = $_POST['room_category_price'];
        $room_category_description = $_POST['room_category_description'];

        // Cambialo a un fichero aparte porque vas a utilizarlo para que un cliente pueda subir una foto de perfil, para que puedas ingresar las fotos de una nueva categoria de habitacion y si se quiere foto de perfil del administrador
        
        if(isset($_FILES['file'])){

            $file = $_FILES['file'];
            print_r($file);
            echo "<br>".$file['tmp_name'];
            // Nombre del archivo subido
            $file_name = $file['name'];
           
            // Con el tipo luego podemos filtrarlo para que sea solo formatos png, jpg, jpge
            $file_type = $file['type'];
            
            $valid_types = array('image/jpg', 'image/webp', 'image/png', 'image/jpeg');

            // Variable donde guardaremos la ruta de la imagen en la base de datos, si esta vacia se añadira una imagen por defecto 
            $path_img = '/student044/dwes/img/default.webp';

            // Comprobar que el archivo sea jpg, webp, png, jpge y guardamos la ruta de la imagen para agregarlo a la base de datos, si no es ninguno de estos formatos le pasaremos la ruta de la imagen por defecto
            if(in_array($file_type, $valid_types)){

                $path_img = '/student044/dwes/img/'.$file_name;
                move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$path_img);

            }else {

                move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$path_img);
                echo "Imagen no existe o no es valido, se utilizara una imagen por defecto, luego se podra cambiar la imagen";

            }
        }

        //Conexion a la base de datos
        // include($_SERVER['DOCUMENT_ROOT'].'/student044/dwes/db/db_connect.php');

        // $sql = "INSERT INTO 044_room_category
        // (room_category_id, room_category_name, room_category_price, room_category_description, room_category_img)
        // VALUES
        // (DEFAULT, '$room_category_name', '$room_category_price', '$room_category_description', '$path_img')";

        // $query = mysqli_query($con, $sql);

        // if($query){
            
        //     echo "<br>"."categoria creada con exito";
        // }else {
        //     echo "error en crear la categoria";
        // }

    }
?>