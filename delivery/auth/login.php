<?php

include "../../connect.php";
 
$password = sha1($_POST['password']);

$email = filterRequest("email"); 

getData("delivery" , "delivery_email = ? AND  delivery_password = ?" , array($email , $password)) ; 
