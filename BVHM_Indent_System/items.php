<?php


include 'db.php';



$q = $_REQUEST["q"];

$one="set @num:=0";

$two="update hm_product set id=@num:=(@num+1)";

$three="alter table hm_product AUTO_INCREMENT=1";

$run_one=mysqli_query($conn,$one);
$run_two=mysqli_query($conn,$two);
$run_three=mysqli_query($conn,$three);


if($q=="all")
{
$query="select * from hm_product";
}	
else
{
$query="SELECT * FROM hm_product where pname like '%$q%' "; //over all
}
//echo $query;

$rn=mysqli_query($conn,$query);

if($rn)
{
		//echo "success";
	
}

else
{
		echo mysqli_error($conn);
}

	

						if(mysqli_num_rows($rn)>=1)
						{	
							echo"<table class='table  table-striped table-hover'>
						<thead>
							<tr>
								<th>ID</th>
								<th>Product Name</th>
								<th>Category</th>
								<th>Price</th>
								
								
								
							</tr>";
						echo"</thead>";
						echo"<tbody>";
					
						while($fetch=mysqli_fetch_assoc($rn))
						{
								echo"<tr>";
									echo"<td>";
										echo $fetch['id'];
									echo"</td>";
								
								
									echo"<td>";
										echo "<input type='text' value='".$fetch['pname']."' id='".$fetch['id']."' name='pname' onkeyup='update_pname(this.value,this.id);'>";
									echo"</td>";
									echo"<td>";
										echo  "<input type='text' value='".$fetch['category']."'  id='".$fetch['id']."' name='category' onkeyup='update_category(this.value,this.id);'>";
									echo"</td>";
									echo"<td>";
										echo  "<input type='text' value='".$fetch['price']."' id='".$fetch['id']."' name='price' onkeyup='update_price(this.value,this.id);'>";
									echo"</td>";
									
									
									
									
								echo"</tr>";	
												
						}
						
						echo"</tbody>";
					echo"</table>";
						}
						else
						{
								echo"No such product found";
						}
;
?>
