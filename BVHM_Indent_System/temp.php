<?php

	include 'db.php';
	$get_Inos="select indent from indent";
	$run_get_Inos=mysqli_query($conn,$get_Inos);
								//echo "hello";
	while($fetch=mysqli_fetch_assoc($run_get_Inos))
	{
		echo"<option value='$fetch[indent]'>";
		echo $fetch['indent'];
		echo"</option>";
												
	}
										
?>