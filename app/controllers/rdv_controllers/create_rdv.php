<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../../models/database.php';
include_once '../../models/employees_rdv.php';
include_once '../../models/employees.php';
$database = new Database();
$db = $database->getConnection();
$item = new Employee_rdv($db);
$data = json_decode(file_get_contents("php://input"));

$item->id_user = $data->id_user;
$item->sujet_rdv = $data->sujet_rdv;
$item->date_rdv = $data->date_rdv;
$item->id_time = $data->id_time;






/* $item->sujet_rdv = $_GET['sujet_rdv'];
$item->date_rdv = $_GET['date_rdv']; */


if($item->createEmployee_rdv()){
echo 'Employee created successfully.';
} else{
echo 'Employee could not be created.';
}
?>