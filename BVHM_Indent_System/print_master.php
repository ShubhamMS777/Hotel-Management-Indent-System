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




$q="/".$_GET['q']."/";
$todays_date=str_replace("/","_",$q);
$get_Inos="select * from $todays_date";

//echo $get_Inos;
$run_get_Inos=mysqli_query($conn,$get_Inos);
 
								//echo "hello";


echo"<table border=1 style='width:100%;height:10%' cellpadding='5';>";
echo"<tbody>";


echo"<tr>";
		echo "<th>";
			echo"Items";
		echo"</th>";
		
		echo "<th>";
			echo"Brand";
		echo"</th>";
		echo"<th>";
			echo"Degree";
		echo "<th>";
			echo"ATK";
		echo"</th>";
		echo"<th>";
			echo"BTK";
		echo "<th>";
			echo"QTK";
		echo"</th>";
    
    
        echo "<th>";
			echo"FNB";
		echo"</th>";
    
    
        echo "<th>";
			echo"RND";
		echo"</th>";
		
		
		
		echo "<th>";
			echo"Total Required Qty.";
		echo"</th>";
		
		
		echo "<th>";
			echo"Total Issued";
		echo"</th>";
		
		
		
	echo"</tr>";


while($fetch=mysqli_fetch_assoc($run_get_Inos))
{
	
	echo "<tr>
	<td>
		$fetch[items]
	</td>
	
	<td>
		$fetch[brand]
	</td>
	
	<td>
		$fetch[degree]
	</td>
	
	<td>
		$fetch[ATK]
	</td>
	
	
	<td>
		$fetch[BTK]
	</td>
	
	
	<td>
		$fetch[QTK]
	</td>
    
    
    <td>
		$fetch[FNB]
	</td>
    
    <td>
		$fetch[RND]
	</td>
	
	
	<td>
		$fetch[quantity]
	</td>
	
	
	
	<td>
		$fetch[issued]
	</td>
	
	</tr>";
}	
	







					
						

				
echo"</tbody>";				
echo"</table>";




	
	
	
?>


</body>
</html>
