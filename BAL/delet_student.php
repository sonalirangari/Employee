<?php
include '../DAL/DBconnection.php';

$db= new DBConnect();
$id=$_REQUEST['id'];

$res=$db->delete($id);

