<?php

class Employee_rdv{

// dbection
private $db;
// Table
private $db_table = "rdv";
// Columns
public $id;
public $id_user;
public $sujet_rdv;
public $date_rdv;
public $time_rdv;

// Db dbection
public function __construct($db){
    $this->db = $db;
    }

// GET ALL
public function getEmployees_rdv(){
    $sqlQuery = "SELECT id, id_user, sujet_rdv, date_rdv FROM " . $this->db_table . "";
    $this->result = $this->db->query($sqlQuery);
    return $this->result;
    }

// CREATE
public function createEmployee_rdv(){
    // sanitize
    $this->id_user=($this->id_user);
    $this->sujet_rdv=($this->sujet_rdv);
    $this->date_rdv=($this->date_rdv);
    $this->id_time=($this->id_time);
    $sqlQuery = "INSERT INTO
    ". $this->db_table ." 
    SET id_user = '".$this->id_user."',
    sujet_rdv = '".$this->sujet_rdv."', 
    date_rdv = '".$this->date_rdv."', 
    id_time = '".$this->id_time."' ";

    $this->db->query($sqlQuery);
    if($this->db->affected_rows > 0){
        return true;
        }
        return false;
        }

// UPDATE single
public function getSingleEmployee_rdv(){
    $sqlQuery = "SELECT 
    id,
    id_user,
    sujet_rdv,
    date_rdv, 
    time_rdv
    FROM
    ". $this->db_table ." WHERE id = ".$this->id;
    $record = $this->db->query($sqlQuery);
    $dataRow=$record->fetch_assoc();
    $this->sujet_rdv = $dataRow['sujet_rdv'];
    $this->date_rdv = $dataRow['date_rdv'];
    $this->time_rdv = $dataRow['time_rdv'];
    }

    // UPDATE
public function updateEmployee_rdv(){
    $this->sujet_rdv=($this->sujet_rdv);
    $this->date_rdv=($this->date_rdv);
    $this->time_rdv=($this->time_rdv);
    $this->id=($this->id);

    $sqlQuery = "UPDATE ". $this->db_table ." SET
    sujet_rdv = '".$this->sujet_rdv."', 
    date_rdv = '".$this->date_rdv."', 
    time_rdv = '".$this->time_rdv."',
    WHERE id_user = ".$this->id_user;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// DELETE
function deleteEmployee_rdv(){
    $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
    $this->db->query($sqlQuery);
    if($this->db->affected_rows > 0){
    return true;
    }
    return false;
    }
    }

?>