<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$data = array(
    "orders_status" => 4
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 3");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 

insertNotify("success", "Your Order Has been deliverd", $userid, "users$userid", "none",  "refreshorderpending");


sendGCM("warning" , "The Order Has been deliverd to The Customer" , "services" , "none" , "none"); 
