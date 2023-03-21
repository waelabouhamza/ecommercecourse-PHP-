<?php 

include "../connect.php" ; 

$ordersid = filterRequest("id")  ;

getAllData("ordersdetailsview" , "cart_orders = $ordersid "); 

?>