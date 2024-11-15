<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$deliveryid = filterRequest("deliveryid");

$data = array(
    "orders_status" => 3,
    "orders_delivery" => $deliveryid
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 2");

//order on the way