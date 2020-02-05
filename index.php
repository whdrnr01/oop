<?php
include_once "class/abstract/paymenttypes.abstract.php";
include_once "class/BuyProduct.class.php";

$buyProduct = new BuyProduct();

echo $buyProduct->getPayment();