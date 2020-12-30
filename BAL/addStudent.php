<?php

include '../DAL/DBconnection.php';
$db= new DBConnect();

$name= $_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$address= $_POST['address'];
$city= $_POST['city'];
$education= $_POST['education'];

$res= $db->add($name,$email,$contact,$address,$city,$education);