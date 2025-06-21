<?php 

function postserver($method){
   if($_SERVER['REQUEST_METHOD'] == $method){
        return true;
    }
    return false;
}
function chekinput($input){
    if(isset($_POST[$input])){
        return true;
    }
        return false;
}
function sanitezinput ($input){
 return trim(htmlspecialchars
 (htmlentities($input)));
}
function redirector($path){
    header("location:$path");
}

