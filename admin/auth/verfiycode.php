<?php 

include "../../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verifycode") ; 

$stmt = $con->prepare("SELECT * FROM `admin` WHERE admin_email = '$email' AND admin_verfiycode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    $data = array("admin_approve" => "1") ; 

    updateData("admin" , $data , "admin_email = '$email'");

}else {
    
 printFailure("verifycode not Correct") ; 

}
?>