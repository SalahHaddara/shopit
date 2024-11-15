<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$type = filterRequest("ordertype");

if($type == "0"){ // if the type is delivery
    $data = array(
        "orders_status" => 2
    );
}else{ // if the type is pickup 
$data = array(
    "orders_status" => 4
);
}

updateData("orders", $data, "orders_id = $orderid AND orders_status = 1");

//order prepared