<?php 

include '../../connect.php';

$msgError = array()  ;

$table = "categories";

$name = filterRequest("name");

$namear = filterRequest("namear"); 

$imagename = imageUpload( "../../upload/categories" , "files") ;

$data = array( 
"categories_name" => $name,
"categories_nama_ar" => $namear,
"categories_image" => $imagename,
);

insertData($table , $data);