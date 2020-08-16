
<?php

	
			//echo $_GET['q'];
			
			
			
			for($i=$_GET['q'];$i<=$_GET['q'];$i++)
	{
		
		
		
		$c=$i;
		echo"<tr>";
			echo "<td>";
				echo "<input type='text' name='srno[]' value='$c'>";
			echo"</td>";
								
			echo "<td>";
				echo "<input type='text' name='item[]' list='pname'  onfocusout='getPrice(this.value,$c)'>";
				echo"<datalist id='pname'>";
				$get_prod="select * from hm_product where category like '".$_POST['cat']."' ";
				$run_get_prod=mysqli_query($conn,$get_prod);
										
				while($fetch=mysqli_fetch_assoc($run_get_prod))
				{
					echo"<option value='$fetch[pname]'>";
						echo $fetch['pname'];
					echo"</option>";
												
				}
									
										
									
									
									
								
				echo"</datalist>";
										
			echo"</td>";
                            
                            
                                
									
									
								
									
			echo "<td>";
										
				echo "<input type='text' name='degree[]'>";
			echo"</td>";
									
									
			echo "<td>";
				//onfocusout='calcAmt(this.value,$c);' 
				echo "<input type='text' name='req_quan[]' id='quan_$c'>";
									
			echo"</td>";
									
									
									
			echo "<td>";
				echo "<input type='text' name='rate[]' id='rate_$c'>";
									
			echo"</td>";
									
									
			echo "<td>";
				echo "<input type='text' name='amount[]' id='$c' onfocus='cal_amount(this.id);' autocomplete='off' onfocusout='insertRow();'>";
									
			echo"</td>";
									
									
								
		echo"</tr>";
								
								
							
								
									
								
	}
		
?>
	