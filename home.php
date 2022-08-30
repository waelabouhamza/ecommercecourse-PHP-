<?php 

include "connect.php" ; 

$alldata = array() ; 

$alldata['status'] = "success" ; 


$categories = getAllData("categories" , null , null , false )  ;

$alldata['categories'] = $categories ; 

 
echo json_encode($alldata) ;
