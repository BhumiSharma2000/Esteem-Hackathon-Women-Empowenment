<?php
	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
        $id=$_GET['id'];
        $a="SELECT * FROM complain WHERE c_id='$id'";
        $q=mysqli_query($con,$a);
        $b=mysqli_fetch_array($q);
        $count=$b['no_of_vote'];
        $count1=$count+1;
        $a="UPDATE `complain` SET `no_of_vote`='$count1' WHERE c_id='$id'";
        var_dump($a);
        $result = mysqli_query($con,$a);
        header("location:viewcomplain.php?flag=1");	
	}
?>