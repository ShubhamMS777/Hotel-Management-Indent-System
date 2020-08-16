<?php
include 'db.php';


$start=$_GET['s_date'];

$end=$_GET['e_date'];

$kitchen=$_GET['k_type'];
//SELECT sum(req_quan),sum(rate),sum(amount),sum(issued) from product
$query="select * from product where indent in (SELECT indent FROM indent WHERE kitchen_type like '".$kitchen."' and required_on BETWEEN '".$start."' and '".$end."')";
$sum="select sum(req_quan),sum(rate),sum(amount),sum(issued),sum(s_rate),sum(s_amount) from product where indent in (SELECT indent FROM indent WHERE kitchen_type like '".$kitchen."' and required_on BETWEEN '".$start."' and '".$end."')";
//echo $sum."<br>";
$run=mysqli_query($conn,$query);

$run_sum=mysqli_query($conn,$sum);
echo"<table class='table table-striped table-hover'>";

echo"<tr>";

echo"<th>";
echo"Indent";
echo"</th>";


echo"<th>";
echo"Items";
echo"</th>";



echo"<th>";
echo"Degree";
echo"</th>";

echo"<th>";
echo"Required_quantity";
echo"</th>";

echo"<th>";
echo"Issued";
echo"</th>";

echo"<th>";
echo"Rate";
echo"</th>";



echo"<th>";
echo"Supplier Rate";
echo"</th>";


echo"<th>";
echo"Amount";
echo"</th>";



echo"<th>";
echo"Supplier Amount";
echo"</th>";

echo"</tr>";
while($fetch=mysqli_fetch_assoc($run))
{


	echo"<tr>";
		echo"<td>";
			echo $fetch['indent'];
		echo"</td>";
	
		echo"<td>";
			echo $fetch['items'];
		echo"</td>";
	
		
	
		echo"<td>";
			echo $fetch['degree'];
		echo"</td>";

		echo"<td>";	
			echo $fetch['req_quan'];
		echo"</td>";
		
		echo"<td>";	
			echo $fetch['issued'];
			
		echo"</td>";
		
		
		echo"<td>";
			echo $fetch['rate'];
		echo"</td>";
    
    
        echo"<td>";
			echo $fetch['s_rate'];
		echo"</td>";
	
		echo"<td>";
			echo $fetch['amount'];
		echo"</td>";
    
    
        echo"<td>";
			echo $fetch['s_amount'];
		echo"</td>";
	echo"</tr>";	
	
}

	while($f=mysqli_fetch_assoc($run_sum))
	{	
		echo"<tr>";
		
			echo"<td>";
			echo"</td>";
			
			echo"<td>";
			echo"</td>";
			
			
			
			
			echo"<td>";
				echo"Total";
			echo"</td>";
	
			echo"<td>";
			
			//	echo"$f['sum(req_quan)']";
			
				echo $f['sum(req_quan)'];
			
			echo"</td>";
			
			
			echo"<td>";
			
				echo $f['sum(issued)'];
			
			echo"</td>";
			
			echo"<td>";
			
				echo $f['sum(rate)'];
			
			
			echo"</td>";
        
        
        
            echo"<td>";
			
				echo $f['sum(s_rate)'];
			
			
			echo"</td>";
			
			echo"<td>";
			
				echo $f['sum(amount)'];
			
			echo"</td>";
        
        
            echo"<td>";
			
				echo $f['sum(s_amount)'];
			
			echo"</td>";
			
			
			
		echo"</tr>";
	}

echo"</table>";
?>