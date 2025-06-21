<?php 
function requirinput($input){
  if(empty($input)){
      return false;
}
      return true;
}
function min_input($input,$length){
    if(strlen($input) < $length){
        return false;
    }
    return true;
}


function max_input($input,$length){
    if(strlen($input) > $length){
        return false;
    }
    return true;
}
function emailvaldate ($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       return false;
    }
        return true; 
}

