<?php
header('Content-Type:application/json');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Method : POST');
 header('Access-Control-Allow-Headers:Access-Control-Allow-Header,Content-Type 
 ,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include "config.php";
$data= json_decode(file_get_contents("php://input"), true);
$id = $data['sid'];
$name = $data['sname'];
$quality = $data['squality'];
$price = $data['sidprice'];
$category = $data['scategory'];
 

 $sql= "INSERT INTO data(id,name,quality,price,category) VALUES ('{$id}','{$name}','{$quality}','{$price}','{$category}')";
 
 if(mysqli_query($conn , $sql)){
    echo json_encode(array('message'=> 'Field Record Inserted', 'status' => true));
 }else{
      echo json_encode(array('message'=>  'Field Record Not Inserted', 'status' => false));
 }
?>