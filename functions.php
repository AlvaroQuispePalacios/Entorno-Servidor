<?php
    function htmlChars($input){
        echo htmlspecialchars($input) . "</br>" ;
    }
    
    function campoRequerido($input){
        echo !(trim($input) == "") ? "hay correo" : "No hay correo";
        // return !(trim($input) == "");
    }

?>