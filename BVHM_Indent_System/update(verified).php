<?php

    include 'db.php';

    //echo"update indent set verified='".$_GET['q']."' where indent=".$_GET['indent']."";
    $run=mysqli_query($conn,"UPDATE indent SET verified = '".$_GET['q']."' WHERE indent= ".$_GET['indent']."");
	
	
	if($run)
	{
			echo"successful"."UPDATE indent SET verified = '".$_GET['q']."' WHERE indent = ".$_GET['indent']."";
	}
	else
	{
		
		echo"mysqli_error($conn)"."UPDATE `indent` SET `verified` = '".$_GET['q']."' WHERE `indent`.`id` = ".$_GET['indent']."";
	}
?>