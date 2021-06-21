<?php
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

$item->token = $_GET['token'];
$item->cin = $_GET['cin'];
$item->name = $_GET['name'];
$item->email = $_GET['email'];
$item->phone = $_GET['phone'];
$item->country = $_GET['country'];
$item->gender = $_GET['gender'];
if($item->createEmployee()){
echo 'Employee created successfully.';
} else{
echo 'Employee could not be created.';
}
?>