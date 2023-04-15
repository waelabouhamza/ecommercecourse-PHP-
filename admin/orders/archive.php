<?php 

include "../../connect.php" ; 
 
getAllData('ordersview' , "1 = 1 AND orders_status =  4") ; 

?>