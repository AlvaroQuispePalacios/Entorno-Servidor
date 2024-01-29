<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<?php

$file = "./prueba.txt";
// if(file_exists($file)){
//     echo readfile($file);
//     copy($file,"./copia.txt");
//     filesize($file);
//     rename("./copia.txt", "./copia2.txt");
//     mkdir("./directorioPruba");
// }

// Only read
// $handle = fopen($file, "r");
// read All File
// echo fread($handle, filesize($file));

// read a single line
// echo fgets($handle);
// echo fgets($handle);

/*
        Read and Write 
*/
$handle = fopen($file, "r+");
fwrite($handle, "Esto es una nueva linea del fichero\n");
?>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
