<?php 
header('Content-Type:application/json');
header('Acsess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type:application/json,Access-Control-Allow-Methods,Authorization,X-Requested-With');
$data=json_decode(file_get_contents("php://input"),true);
$student_name=$data['name'];
$student_roll=$data['roll'];
$student_class=$data['class'];
//code here....
include "configs.php";

$sql="INSERT INTO `students` (`name`, `roll`, `class`) VALUES ('{$student_name}', '{$student_roll}', '{$student_class}')";
$result=mysqli_query($conn,$sql);
if (mysqli_query($conn,$sql)) {
  
    echo json_encode(array('message'=>'Record inserted','status'=>true));
}else{
echo json_encode(array('message'=>'No Record not inserted','status'=>false));
}

?>