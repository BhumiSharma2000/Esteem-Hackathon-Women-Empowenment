<?php
include("connection.php");
var_dump($_GET);
$id=$_GET['del'];
$qry="SELECT * FROM project WHERE p_id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$qry1="UPDATE `project` SET active=0 WHERE p_id=$id";
$rs1=mysqli_query($con,$qry1);
echo $qry1;
header("location:manageproject.php");
?>