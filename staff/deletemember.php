<?php
include("connection.php");
var_dump($_GET);
$id=$_GET['del'];
$qry="SELECT * FROM tbl_login WHERE login_id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$active=$row['active'];
if($active==1)
{
	$qry1="UPDATE `tbl_login` SET department=NULL,team_leader=NULL,team_number=NULL WHERE login_id=$id";
	$rs1=mysqli_query($con,$qry1);
	echo $qry1;
	header("location:managemember.php");
}
else
{
	echo "error";
	header("location:managemember.php");
}
?>