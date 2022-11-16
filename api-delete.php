<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method : DELETE');
 header('Access-Control-Allow-Headers:Access-Control-Allow-Header,Content-Type 
 ,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include "config.php";
$data= json_decode(file_get_contents("php://input"), true);
$field_id = $data['sid'];

 $sql=" DELETE FROM data WHERE id = {$field_id}";
 if(mysqli_query($conn , $sql)){
    echo json_encode(array('message'=> 'Field Record Deleted', 'status' => true));
 }else{
      echo json_encode(array('message'=> 'Field Record not Deleted', 'status' => false));
 }
?>