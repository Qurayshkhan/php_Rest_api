<?php 
header('Content-Type:application/json');
header('Acsess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type:application/json,Access-Control-Allow-Methods,Authorization,X-Requested-With');
$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['id'];
$student_name=$data['name'];
$student_roll=$data['roll'];
$student_class=$data['class'];
//code here....
include "configs.php";

$sql="UPDATE `students` SET `name` = '{$student_name}', `roll` = '{$student_roll}', `class` = '{$student_class}' WHERE `students`.`id` = {$student_id}";
$result=mysqli_query($conn,$sql);
if (mysqli_query($conn,$sql)) {
  
    echo json_encode(array('message'=>'Record update','status'=>true));
}else{
echo json_encode(array('message'=>'No Record not update','status'=>false));
}

?>