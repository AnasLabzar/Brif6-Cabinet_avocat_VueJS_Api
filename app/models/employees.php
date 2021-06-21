<?php
class Employee{
// dbection
private $db;
// Table
private $db_table = "client";
// Columns
public $id_user;
public $token;
public $cin;
public $name;
public $email;
public $phone;
public $country;
public $gender;


// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function getEmployees(){
$sqlQuery = "SELECT id_user, token, cin, name, email, phone, country, gender FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}

// CREATE
public function createEmployee(){
// sanitize
$this->token=($this->token);
$this->cin=($this->cin);
$this->name=htmlspecialchars(strip_tags($this->name));
$this->email=htmlspecialchars(strip_tags($this->email));
$this->phone=htmlspecialchars(strip_tags($this->phone));
$this->country=htmlspecialchars(strip_tags($this->country));
$this->gender=htmlspecialchars(strip_tags($this->gender));
$sqlQuery = "INSERT INTO
". $this->db_table ." 
SET token = '".$this->token."', 
cin = '".$this->cin."', 
name = '".$this->name."',
email = '".$this->email."',
phone = '".$this->phone."',
country = '".$this->country."', 
gender = '".$this->gender."'";
$this->db->query($sqlQuery);

if($this->db->affected_rows > 0){
return true;
}
return false;
}

// UPDATE
public function getSingleEmployee(){
$sqlQuery = "SELECT 
id_user,
token,
cin, 
name, 
email, 
phone, 
country,
gender 
FROM
". $this->db_table ." WHERE id_user = ".$this->id_user;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->token = $dataRow['token'];
$this->cin = $dataRow['cin'];
$this->name = $dataRow['name'];
$this->email = $dataRow['email'];
$this->phone = $dataRow['phone'];
$this->country = $dataRow['country'];
$this->gender = $dataRow['gender'];
}

// UPDATE
public function updateEmployee(){
$this->token=($this->token);
$this->cin=($this->cin);
$this->name=htmlspecialchars(strip_tags($this->name));
$this->email=htmlspecialchars(strip_tags($this->email));
$this->phone=htmlspecialchars(strip_tags($this->phone));
$this->country=htmlspecialchars(strip_tags($this->country));
$this->gender=htmlspecialchars(strip_tags($this->gender));
$this->id_user=($this->id_user);

$sqlQuery = "UPDATE ". $this->db_table ." SET
token = '".$this->token."', 
cin = '".$this->cin."', 
name = '".$this->name."',
email = '".$this->email."',
phone = '".$this->phone."',
country = '".$this->country."', 
gender = '".$this->gender."',
WHERE id_user = ".$this->id_user;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// DELETE
function deleteEmployee(){
$sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id_user = ".$this->id_user;
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}
}




?>