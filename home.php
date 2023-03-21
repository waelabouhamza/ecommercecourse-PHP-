<?php 

include "connect.php" ; 

$alldata = array() ; 

$alldata['status'] = "success" ; 

$settings = getAllData("settings" , "1 = 1" , null , false )  ;

$alldata['settings'] = $settings ; 

$categories = getAllData("categories" , null , null , false )  ;

$alldata['categories'] = $categories ; 

$items = getAllData("itemstopselling" , "1 = 1 ORDER BY countitems DESC  " , null , false )  ;

$alldata['items'] = $items ; 


echo json_encode($alldata) ;
