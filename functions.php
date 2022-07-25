<?php
//Require Mysql connection
require ('database/DBController.php');


//Require product class
require ('database/Product.php');


//DBController Object
$db = new DBController();

//PRODUCT OBJECT
$product=new Product($db);

