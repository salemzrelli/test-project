<?php

function test($input){
    $result="";
    for ($i==0;i<strlen($input);i+2){
        $result=$result. strtoupper($input[i]);
    }
    return $result;
}

?>