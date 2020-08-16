<?php

	include 'db.php';
	$prod=$_GET['q'];
	$get_Inos="select price from hm_product where pname like '".$prod."'";
	$run_get_Inos=mysqli_query($conn,$get_Inos);
								//echo "hello";
	while($fetch=mysqli_fetch_assoc($run_get_Inos))
	{
		
		echo $fetch['price'];
		
												
	}

	
	
	
?>