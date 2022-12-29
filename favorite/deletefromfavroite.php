<?php 

include "../connect.php" ; 

$id = filterRequest("id") ;  

deleteData("favorite" , "favorite_id = $id"); 
