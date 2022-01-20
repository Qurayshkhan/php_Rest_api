<?php 
     //code here....
$server="localhost";
$username="root";
$password="";
$dbname="apis";
$conn=mysqli_connect($server,$username,$password,$dbname);
if($conn){
    // echo "dbconnect successfully";
}else{
    die("Connnection Faild").mysqli_connect_error($conn);
}
?>