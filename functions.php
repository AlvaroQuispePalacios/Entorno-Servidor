<?php
    function validateInput($input){
        return htmlspecialchars($input);
    }
    


    function campoRequerido($input){
        echo !(trim($input) == "") ? "hay correo" : "No hay correo";
        // return !(trim($input) == "");
    }

?>