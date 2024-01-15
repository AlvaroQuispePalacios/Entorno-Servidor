<?php
// Recuperael parametro de la URL
$q = $_REQUEST["q"];
if($q != ""){
    $q = strtolower($q);
    echo $q;
}
?>
