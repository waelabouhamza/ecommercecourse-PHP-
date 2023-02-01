<?php

include "../connect.php";

$userid = filterRequest("usersid");

$data  = getAllData("cartview", "cart_usersid = $userid", null, false);

$stmt = $con->prepare("SELECT SUM(itemsprice) as totalprice , count(countitems) as totalcount FROM `cartview`  
WHERE  cartview.cart_usersid =  $userid 
GROUP BY cart_usersid  ");

$stmt->execute();


$datacountprice = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(array(
    "status" => "success",
    "countprice" =>  $datacountprice,
    "datacart" => $data,
));
