<?php 

include "../connect.php" ; 

$usersid = filterRequest("usersid") ; 

getAllData("address" , "address_usersid = $usersid ") ; 