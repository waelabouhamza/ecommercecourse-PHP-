<?php 

include "../../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verifycode") ; 

$stmt = $con->prepare("SELECT * FROM `admin` WHERE admin_email = '$email' AND admin_verfiycode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

 result($count) ;
