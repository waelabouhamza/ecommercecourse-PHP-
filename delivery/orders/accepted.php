<?php 

include "../../connect.php" ; 

$id = filterRequest("id") ; 
  
getAllData('ordersview' , "1 = 1 AND  orders_status = 3 AND orders_delivery = $id ") ; 

?>