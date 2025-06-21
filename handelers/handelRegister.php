<?php 
session_start();
include "../core/function.php";
include "../core/validation.php";
$errors = [];

if(postserver("POST") && chekinput('name')){

    foreach($_POST as $key => $value){
       $$key = sanitezinput($value);
    }
    // echo $name;
    if(!requirinput($name)){
        $errors[]= "name is requier";
    }elseif(!min_input($name,3)){
        $errors[]= "name must be max > 3";
    }elseif(!max_input($name,20)){
        $errors[]= "name must be min < 20";
    }
    // var_dump($errors);
    if(!requirinput($email)){
         $errors[]= "email is requier";
        }elseif(!emailvaldate($email)){
        $errors[]= " please type valedat email";
    }

    if(!requirinput($password)){
        $errors[]= "password is requier";
    }elseif(!min_input($password,3)){
        $errors[]= "password must be max > 3";
    }elseif(!max_input($password,20)){
        $errors[]= "password must be min < 20";
    }
   


    if(empty($errors)){
         $user_file = fopen("../data/users.csv","a+");
        $data = [$name,$email,sha1($password)];
        fputcsv ($user_file,$data);

        $_SESSION['auth'] = [$name,$email];
        redirector("../index.php");
        die();
    }else{
        $_SESSION['errors'] = $errors;
        redirector("../register.php");
        die;
    }

        
}else{
    echo "not supportde method";
}