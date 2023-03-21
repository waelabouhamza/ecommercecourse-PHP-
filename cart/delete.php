<?php 

include "../connect.php" ; 

$usersid = filterRequest("usersid");
$itemsid = filterRequest("itemsid");

deleteData("cart" , "cart_id  = (SELECT cart_id FROM cart WHERE cart_usersid = $usersid AND cart_itemsid = $itemsid AND cart_orders = 0 LIMIT 1) "); 
