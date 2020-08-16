<html>

	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	

	</head>


<body>

<?php
include 'db.php';
//intval($_GET['q']);
$q=intval($_GET['q']);
$get_Inos="select * from indent where indent='".$q."'";
$prod_details="select * from product where indent='".$q."'";
$run_get_Inos=mysqli_query($conn,$get_Inos);
$run_prod_details=mysqli_query($conn,$prod_details);
								//echo "hello";


echo"<table border=1 style='width:100%;height:10%'>";
echo"<tbody>";
while($fetch=mysqli_fetch_assoc($run_get_Inos))
{
	echo"<tr>";
		echo"<td>";
			echo"Indent No:";
		echo"</td>";
		
		echo"<td>";
			echo $fetch['indent'];
		echo"</td>";
	echo"</tr>";
	
	
	echo"<tr>";
		echo"<td>";
			echo"Date:";
		echo"</td>";
		
		echo"<td>";
			echo $fetch['todays_date'];
		echo"</td>";
	echo"</tr>";
	
	
	echo"<tr>";
		echo"<td>";
			echo"Kitchen type:";
		echo"</td>";
		
		echo"<td>";
			echo $fetch['kitchen_type'];
		echo"</td>";
	echo"</tr>";
	
	
	echo"<tr>";
		echo"<td>";
			echo"Facuty name:";
		echo"</td>";
		
		echo"<td>";
			echo $fetch['faculty'];
		echo"</td>";
	echo"</tr>";
	
	
	echo"<tr>";
		echo"<td>";
			echo"Required_on:";
		echo"</td>";
		
		echo"<td>";
			echo $fetch['required_on'];
		echo"</td>";
	echo"</tr>";
}	
	echo' <tr>
		
		<th>Sr. No.</th>
		<th>ITEMS</th>
		<th>Remark</th>
		<th>Degree</th>
		<th>Required Quantity</th>
		<th>Issued</th>
		<th>Rate Per Unit</th>
        <th>Suppliers Rate Per Unit</th>
		<th>Amount(Rs)</th>
        <th>Supplier Amount(Rs)</th>
		
	</tr>';

$i=0;	

while($fetch1=mysqli_fetch_assoc($run_prod_details))
{
	$i=$i+1;
	echo"<tr>
			<td>
				$i
			</td>
			
			<td>
				$fetch1[items]
			</td>
			
			<td>
				$fetch1[remark]
			</td>
	
			<td>
				$fetch1[degree]
			</td>
			
			<td>
				$fetch1[req_quan]
			</td>
			
			<td>
				$fetch1[issued]

			</td>
			
			<td>
				$fetch1[rate]
			</td>
			
            <td>
				$fetch1[s_rate]
			</td>
			
            
			<td>
				$fetch1[amount]
			</td>
            
            
            <td>
				$fetch1[s_amount]
			</td>
	
	</tr>";
	
}



					
						

				
echo"</tbody>";				
echo"</table>";




	
	
	
?>


</body>
</html>
