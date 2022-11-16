<?php
header('Content-Type:application/json');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Method : PUT');
 header('Access-Control-Allow-Headers:Access-Control-Allow-Header,Content-Type 
 ,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include "config.php";
$data= json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$name = $data['sname'];
$quality = $data['squality'];
$price = $data['sidprice'];
$category = $data['scategory'];
 
 $sql= "UPDATE data SET id='{$id}',name='{$name}',quality='{$quality}',price='{$price}',category='{$category}' WHERE id={$id}";
 
 if(mysqli_query($conn , $sql)){
    echo json_encode(array('message'=> 'Field Record UPDATED', 'status' => true));
 }else{
      echo json_encode(array('message'=>  'Field Record Not UPDATED', 'status' => false));
 }
?>