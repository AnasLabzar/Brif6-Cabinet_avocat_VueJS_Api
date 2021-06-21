﻿<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once '../models/database.php';
include_once '../models/employees.php';
$database = new Database();
$db = $database->getConnection();
$item = new Employee($db);

$item->id_user = isset($_GET['id_user']) ? $_GET['id_user'] : die();

if($item->deleteEmployee()){
echo json_encode("Employee deleted.");
} else{
echo json_encode("Data could not be deleted");
}
?>