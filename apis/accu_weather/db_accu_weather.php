<?php
// function readFile($path){
//     if(file_exists($path)){
//         return fread(fopen($path, "r"), filesize($path));
//     }
// }

if (isset($_POST["submit"])) {
    $current_conditions_file = $_SERVER['DOCUMENT_ROOT'] . "/student044/dwes/apis/accu_weather/accu_weather.json";
    $current_conditions_json = fopen($current_conditions_file, "r");
    $current_conditions;
    if (file_exists($current_conditions_file)) {
        $current_conditions = json_decode(fread($current_conditions_json, filesize($current_conditions_file)), true);
    }
    print_r($current_conditions);
    fclose($current_conditions_json);
}
