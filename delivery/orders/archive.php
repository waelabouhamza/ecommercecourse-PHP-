<?php 

include "../../connect.php" ; 

$id = filterRequest("id") ; 
  
getAllData('ordersview' , "1 = 1 AND orders_status = 4   AND orders_delivery = $id   ") ; 

?>