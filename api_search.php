<?php 
header('Content-Type:application/json');
header('Acsess-Control-Allow-Origin:*');

$data=json_decode(file_get_contents("php://input"),true);
$search=$data['search'];
//for seacurity reason
$search=isset($_GET['search'])?$_GET['search']:die();

//code here....
include "configs.php";

$sql="SELECT * FROM `students` WHERE `name` LIKE '%{$search}%'";
$result=mysqli_query($conn,$sql) or die("Sqli error");
if (mysqli_num_rows($result)>0) {
  $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
 echo json_encode($output);

}else{
    echo json_encode(array('message'=>'No search found','status' =>false));
}

?>