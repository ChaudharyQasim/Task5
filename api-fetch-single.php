<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
include "config.php";
$data= json_decode(file_get_contents("php://input"), true);
$field_id = $data['sid'];

 $sql= "SELECT * FROM data WHERE id = {$field_id}";
 $result= mysqli_query($conn , $sql) or die("SQL Query Failed");
 if(mysqli_num_rows($result)> 0){
    $output = mysqli_fetch_all($result , MYSQL_ASSOC );
    echo json_encode($output);
 }else{
      echo json_encode(array('message'=> 'No Record Found.', 'status' => false));
 }
?>