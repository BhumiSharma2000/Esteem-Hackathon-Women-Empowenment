<?php
	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
        $log = $_SESSION['log'];
        $a = "SELECT * FROM tbl_login WHERE email_id='$log'";
        $aa = mysqli_query($con,$a);
        $value = mysqli_fetch_array($aa);
        $id1 = $value['login_id'];
        $ab="SELECT * FROM tbl_detail WHERE login_id='$id1'";
        $ba=mysqli_query($con,$ab);
        $ea=mysqli_fetch_array($ba);
        $name=md5($ea['name']);
		$respondent=$_POST['employee'];
		$description=$_POST['description'];
        $a="INSERT INTO `complain`(`c_id`, `complain`, `name_of_complainer`, `name_of_respondent`, `date`, `no_of_vote`, `status`) VALUES ('','$description','$name','$respondent',CURRENT_TIMESTAMP(),'','')";
        $result = mysqli_query($con,$a);
        header("location:addcomplain.php?flag=1");	
	}
?>