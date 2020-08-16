<html>

	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <link rel="stylesheet" href="css/bootstrap.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script src="js/bootstrap.js"></script>
	

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

echo"<form method='post'>";
echo "<div class='table-responsive'>";

//echo"hellooooooooooooooooo";
echo"<table class='table table-striped table-hover'>";
echo"<tbody>";
while($fetch=mysqli_fetch_assoc($run_get_Inos))
{
	echo"<tr>";
		echo"<td>";
			echo"Indent No:";
		echo"</td>";
		
		echo"<td>";
    
            $ind_no=$fetch['indent'];
			echo"<input type='hidden' value='$ind_no' name='id_no' id='id_no'>";
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
			echo"Faculty:";
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
	
	
	
	echo"<tr>";
		echo"<td>";
			echo"Include ?:";
		echo"</td>";
		
		echo"<td>";
			if($fetch['verified']=='n')
			{
				echo"<input type='checkbox' id='chkbox' checked onclick='change_verified()'>";
				// if it is not included we have to include it
			}
			else
			{
				echo"<input type='checkbox' id='chkbox' onclick='change_verified()'>";
				
			}
		echo"</td>";
	echo"</tr>";
}	
	echo' <tr>
		
		<th>Sr.no</th>
		<th>ITEMS</th>
		<th>Flag</th>
        <th>Remark</th>
		<th>Degree</th>
		<th>Required Quantity</th>
		<th>Rate Per Unit</th>
        <th>Amount(Rs)</th>
        
        
        <th>Issued</th>
        <th>Rate Per Unit</th>
        <th>Amount</th>
		
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
				<input type='text' name='item[]' value='$fetch1[items]'>
			</td>
            
            
			<td>
				<input type='checkbox' id='myCheck.$i' value='$i' onclick='remark(this.id)' >
			</td>
            
            
            <td>
                <input type='text' name='Remark.$i' id='Remark.$i' value='$fetch1[remark]' placeholder='Remark'  disabled onkeyup='update_remark(this.value,$i,$ind_no);'>
            
            </td>
			
	
			<td>
				$fetch1[degree]
			</td>
			
			<td>
				$fetch1[req_quan]
			</td>
			
			
			
			<td>
				$fetch1[rate]
			</td>
			
			<td>
				$fetch1[amount]
			</td>
            
            
            <td>
				<input type='text' name='i.$i' value='$fetch1[issued]' id='$i' onkeyup='update_issued(this.value,$i,$ind_no);' placeholder='Issued Quantity' style='width:100%;padding:10px;margin:0px;' disabled>

			</td>
            
            <td>
                <input type='text' name='s_rate.$i' id='s_rate.$i' value='$fetch1[s_rate]'   disabled onkeyup='update_srate(this.value,$i,$ind_no);'>
            
            
            
            </td>
            
            
            <td>
                <input type='text' name='s_amount.$i' id='s_amount.$i' value='$fetch1[s_amount]'   disabled >
            
            </td>
	
	</tr>";
	
}

echo"<tr  align='center'>
		<td colspan='11'>
			
				<input type='hidden' name='indent' value='$q'>
				<input type='hidden' name='num' value='$i'>
				<input type='submit' name='sub1' value='Submit'>
				
		</td>
	</tr>";	


				
echo"</tbody>";				
echo"</table>";
echo"</div>";
echo"</form>";



	
	
	
?>

</body>
</html>
