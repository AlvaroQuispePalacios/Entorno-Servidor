
<?php
    if(isset($_POST['submit'])){
        $room_category_name = $_POST['room_category_name'];
        $room_category_price = $_POST['room_category_price'];
        $room_category_description = $_POST['room_category_description'];

        // Cambialo a un fichero aparte porque vas a utilizarlo para que un cliente pueda subir una foto de perfil, para que puedas ingresar las fotos de una nueva categoria de habitacion y si se quiere foto de perfil del administrador
        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            // Nombre del archivo subido
            $file_name = $file['name'];
            // Con el tipo luego podemos filtrarlo para que sea solo formatos png, jpg, jpge
            $file_type = $file['type'];

            print_r($file);
            echo "<br>";
            echo $file_name;
            echo "<br>";
            echo $file_type;
            echo "<br>";
            echo $file['tmp_name'];
            
            move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/student044/dwes/img/'.$file_name);

        }else{
            echo 'El archivo no existe D:';
        }
    }
?>