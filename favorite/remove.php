<?php 

include "../connect.php" ; 

$usersid = filterRequest("usersid") ; 
$itemsid = filterRequest("itemsid") ; 

deleteData("favorite" , "favorite_usersid = $usersid AND favorite_itemsid = $itemsid") ; 
