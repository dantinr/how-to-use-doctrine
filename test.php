<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 2018/6/12
 * Time: 14:40
 */

require "bootstrap.php";

$order_id = $argv[1];
$order = $entityManager->getRepository('Order');

$order = $entityManager->find("Order", (int)$order_id);

echo "Address: ".$order->getAddress()."\n";

$address = 'abcdrfg';
//$order->setAddress($address);
//$entityManager->flush();

//echo "Address: ".$order->getAddress();

