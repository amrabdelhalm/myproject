<?php 

session_start();
include "core/function.php";
session_destroy();

redirector("login.php");

die();
    