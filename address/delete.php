<?php 

include "../connect.php" ; 

$addressid = filterRequest("addressid"); 

deleteData("address" , "address_id  = $addressid"); 
