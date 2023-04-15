<?php 

include '../../connect.php';

$msgError = array()  ;

$table = "items";

$name = filterRequest("name");

$namear = filterRequest("namear"); 

$desc = filterRequest("desc"); 

$descar = filterRequest("descar"); 

$count = filterRequest("count");  

$price = filterRequest("price"); 

$discount = filterRequest("discount"); 

$catid = filterRequest("catid"); 

$datenow = filterRequest("datenow"); 
 

$imagename = imageUpload( "../../upload/items" , "files") ;

$data = array( 
"items_name"            => $name,
"items_name_ar"         => $namear,
"items_desc"            => $desc,
"items_desc_ar"         => $descar,
"items_count"           => $count,
"items_price"           => $price,
"items_discount"        => $discount,
"items_active"          => "1",
"items_image"           => $imagename,
"items_cat"             => $catid,
"items_date"            => $datenow
);

insertData($table , $data);