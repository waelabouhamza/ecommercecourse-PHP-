<?php
include "../../connect.php";
$email = filterRequest("email");
$verfiycode     = rand(10000, 99999);
$stmt = $con->prepare("SELECT * FROM `admin` WHERE admin_email = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
result($count);

if ($count > 0) {
    $data = array("admin_verfiycode" => $verfiycode);
    updateData("admin", $data, "admin_email = '$email'", false);
    sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
}
