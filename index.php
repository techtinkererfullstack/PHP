<?php 
//variable
$_myName = "tasnim"; //variable are assigned by value
$_lastName = "alam"; 
$_myName = &$_lastName; //variable assingned by referrence
echo "my name is {$_myName}";


//constant
define('PROFESSION', 'software engineer');
const STATUS_PAID = 'PAID';
echo 'PROFESSTION : ' . PROFESSION;
echo STATUS_PAID;

defined("STATUS_PAID");


//when have static data use constant

//magic variables
echo PHP_VERSION;
echo __LINE__;

//variable variable
$name = 'tasnim';
$$name = 'alam';

echo "$name, {$$name}";


        





