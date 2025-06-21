<?php 
session_start();
include "../core/function.php";
include "../core/validation.php";
$errors = [];

if(postserver("POST") && chekinput('email')){
        foreach($_POST as $key => $value){
             $$key = sanitezinput($value);
        }
    //    echo $email;
    //    echo $password;
        if(!requirinput($email)){
            $errors[]= " email requer";
        }elseif(!emailvaldate($email)){
            $errors[]= " please type valedat email";
        }

        if(!requirinput($password)){
             $errors[]= "password is requier";
        }elseif(!min_input($password,6)){
            $errors[]= "password must be max > 6";
        }elseif(!max_input($password,20)){
            $errors[]= "password must be max > 20";
        }
        
        if(empty($errors)){
            $login_file = fopen("../data/login.csv","a+");
            $login_data = [$email,sha1($password)];
            fputcsv($login_file,$login_data);
            redirector("../login2.php");
        }else{           
            
            $_SESSION['errors'] = $errors;
          redirector("../login.php");
        }


}else{
    
    echo "not supported";
}

