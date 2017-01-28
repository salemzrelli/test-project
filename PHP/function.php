<?php


//isogram upercase function
function test($input){
    $result="";
    for ($i==0;i<strlen($input);i+2){
        $result=$result. strtoupper($input[i]);
    }
    return $result;
}

//isogram function

function isIsogram(string $initialString) {
    $encounteredCharacters = [];
    foreach(prepareString($initialString) as $char) {
        if (in_array($char, $encounteredCharacters)) {
            return false;
        }
        $encounteredCharacters[] = $char;
    }
    return true;
}

?>