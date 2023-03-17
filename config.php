<?php   
$conn=new mysqli("localhost","root","","recipe");
if($conn->connect_error){
    die("failed". $conn->connect_error);
}
?>