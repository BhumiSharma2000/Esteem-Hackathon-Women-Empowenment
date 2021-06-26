<?php
	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
		$name = $_POST['project'];
        $staff=$_POST['employee'];
		$description = $_POST['description'];
        $task=$_POST['task'];
        $team=$_POST['team-number'];
        $query = "INSERT INTO `task`(`t_id`, `name`,project_name, `name_of_staff`, `assigned_on`, `status`) VALUES ('','$task','$name','$staff',CURRENT_TIMESTAMP,'1')";
        $result = mysqli_query($con,$query);
        header("location:addtask.php?flag=1");	
			
    }
?>