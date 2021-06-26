<?php
	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
		$name = $_POST['name'];
		$description = $_POST['description'];
        $start=$_POST['start'];
        $end=$_POST['end'];
        $team=$_POST['team-number'];
        $query = "INSERT INTO `project`(`p_id`, `project_name`, `description`, `start_date`, `end_date`, `team-number`,active) VALUES('','$name','$description','$start','$end','$team','1')";
        $result = mysqli_query($con,$query);
        header("location:addproject.php?flag=1");	
			
    }
?>