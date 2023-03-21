<?php 

include "../connect.php"  ;

$ordersid = filterRequest("id") ; 

deleteData("orders" , "orders_id = $ordersid AND orders_status = 0"); 