<?php 
header('Content-Type:application/json');
header('Acsess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type:application/json,Access-Control-Allow-Methods,Authorization,X-Requested-With');
$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['id'];

//code here....
include "configs.php";

$sql="DELETE FROM `students` WHERE `id`={$student_id}";
$result=mysqli_query($conn,$sql);
if ($result) {
  
    echo json_encode(array('message'=>'Record Delete successfully','status'=>true));
}else{
echo json_encode(array('message'=>'Record not delete','status'=>false));
}

?>