<?php
// Cambialo a un fichero aparte porque vas a utilizarlo para que un cliente pueda subir una foto de perfil, para que puedas ingresar las fotos de una nueva categoria de habitacion y si se quiere foto de perfil del administrador
        
if(isset($_FILES['file'])){

    $file = $_FILES['file'];
    // Nombre del archivo subido
    $file_name = $file['name'];
   
    // Con el tipo luego podemos filtrarlo para que sea solo formatos png, jpg, jpge
    $file_type = $file['type'];
    
    $valid_types = array('image/jpg', 'image/webp', 'image/png', 'image/jpeg');

    // Variable donde guardaremos la ruta de la imagen en la base de datos, si esta vacia se añadira una imagen por defecto 
    $path_img = '/student044/dwes/img/default.png';

    // Comprobar que el archivo sea jpg, webp, png, jpge y guardamos la ruta de la imagen para agregarlo a la base de datos, si no es ninguno de estos formatos le pasaremos la ruta de la imagen por defecto
    if(in_array($file_type, $valid_types)){
        // Cuando el usuario no suba una imagen se ponga la por defecto pero si ya tiene una la deje
        $path_img = '/student044/dwes/img/'.$file_name;
        move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$path_img);

    }else {

        move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$path_img);
        // echo "Imagen no existe o no es valido, se utilizara una imagen por defecto, luego se podra cambiar la imagen";

    }
}

?>