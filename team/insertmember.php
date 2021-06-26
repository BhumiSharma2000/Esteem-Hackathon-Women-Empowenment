<?php
	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
		$team_number=$_POST['team-number'];
		$employee=$_POST['employee'];
		$department=$_POST['department'];
		$query2="SELECT login_id FROM tbl_login WHERE login_id IN(SELECT login_id FROM tbl_detail WHERE name='$employee')";
        var_dump($query2);
		$abc=mysqli_query($con,$query2);
		$xyz=mysqli_fetch_array($abc);
        $id=$xyz['login_id'];
		$query3="SELECT * FROM `tbl_login` WHERE  login_id='$id'";
        var_dump($query3);
		$abc1=mysqli_query($con,$query3);
		$xyz1=mysqli_num_rows($abc1);
            $query = "UPDATE `tbl_login` SET `department`='$department',`team_number`='$team_number' WHERE login_id='$id'";
            var_dump($query);
            $result = mysqli_query($con,$query);
        header("location:addmember.php?flag=1");	
	}
?>