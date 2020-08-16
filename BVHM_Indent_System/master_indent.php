<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<!--<script type="text/javascript" src="dist/jspdf.debug.js"></script>-->
	</head>


	<body>

<?php


if(isset($_POST['Generate']))	
	{
	include 'db.php';
	date_default_timezone_set('Asia/Calcutta');
	
	
	
	
	$query="select distinct items from product where indent in (select indent from indent where verified='n')";
	$run=mysqli_query($conn,$query);
	$count=0;
	$arr=array();
	while($fetch=mysqli_fetch_assoc($run))
	{
		//echo $fetch['items']."<br>";
		$arr[]=$fetch['items'];
		$count++;
	}
	
	
	
	
	
	 //$d="/".date("Y/m/d")."/";
	 
	 $d="/".date('Y/m/d')."/";
	 //$d="/"."2019/07/18"."/";
	 $todays_date=str_replace("/","_",$d);
	 
	 //echo $todays_date."<br>";
    
    $flag=0;
    $val=mysqli_query($conn,"select * from ".$todays_date.""); 
    
    if($val!=FALSE)
    {
        
        echo"table exist";
        $flag=1;
    }
    else
    {
        
        echo"not exist";  //no pron
    }
	
	 $create_table="create table if not exists ".$todays_date." (items varchar(22),brand varchar(22),degree varchar(22),ATK int default 0,BTK int default 0,QTK int default 0,FNB int default 0,RND int default 0,quantity int,issued int) ";	
		
	//echo $create_table;	
	 $run_create_table=mysqli_query($conn,$create_table);
		
	 if($run_create_table)
	 {
		 echo"table created";
		 
	 }
	else
	{
		echo"error:".mysqli_error($conn);
		
	}
	


	
	//echo "Number of items:".$count."<br>";
	
	
	for($i=0;$i<$count;$i++)
	{
		$run1=mysqli_query($conn," SELECT brand,degree,sum(req_quan),sum(issued) from product where items like '".$arr[$i]."' and indent in(select indent from indent where verified !='y') ");
		
		
		
		
		while($fetch1=mysqli_fetch_assoc($run1))
		{
			
			//echo"Total ".$arr[$i]." required is ".$fetch1['sum(req_quan)']."<br>";
			
			
					$ka=mysqli_query($conn,"select sum(req_quan) from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='ATK' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						
						$A=$get['sum(req_quan)'];//ATK
						
						if($A=='')
						{
								$A=0;
						}
					}
					
					$ka=mysqli_query($conn,"select sum(req_quan) from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='BTK' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						
						$B=$get['sum(req_quan)'];
						
						if($B=='')
						{
								$B=0;
						}
					}
					
					$ka=mysqli_query($conn,"select sum(req_quan) from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='QTK' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						
						$Q=$get['sum(req_quan)'];
						
						if($Q=='')
						{
								$Q=0;
						}
					}

            
            
                    $ka=mysqli_query($conn,"select sum(req_quan) from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='FNB' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						
						$F=$get['sum(req_quan)'];
						
						if($F=='')
						{
								$F=0;
						}
					}

            
                    $ka=mysqli_query($conn,"select sum(req_quan) from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='RND' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						
						$R=$get['sum(req_quan)'];
						
						if($R=='')
						{
								$R=0;
						}
					}
			
            
					/*$m="insert into ".$todays_date." (items,brand,degree,A,B,C,quantity) values ('".$arr[$i]."','".$fetch1['brand']."','".$fetch1['degree']."',".$A.",".$B.",".$C.",".$fetch1['sum(req_quan)'].")";
					//echo $m."<br>";*/
			
					mysqli_query($conn,"insert into ".$todays_date." (items,brand,degree,ATK,BTK,QTK,FNB,RND,quantity,issued) values ('".$arr[$i]."','".$fetch1['brand']."','".$fetch1['degree']."',".$A.",".$B.",".$Q.",".$F.",".$R.",".$fetch1['sum(req_quan)'].",".$fetch1['sum(issued)'].")");
					
				
					
				
				
				
				
				
				
				
				
				
				
				
				
				
					/*$ka=mysqli_query($conn,"select sum(req_quan) from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='A' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						
						mysqli_query($conn,"insert into ".$todays_date." (A) values (".$get['sum(req_quan)'].")");
					}
				
				
				
					$ka=mysqli_query($conn,"select product.req_quan from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='B' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						//mysqli_query($conn,"insert into ".$todays_date." (B) values (".$get['sum(req_quan)'].")");
					}
				
				
				
					$ka=mysqli_query($conn,"select product.req_quan from product 
					inner join indent on product.indent=indent.indent
					where product.items like '".$arr[$i]."' and indent.kitchen_type='C' and verified='n'");
				
					while($get=mysqli_fetch_assoc($ka))
					{
						mysqli_query($conn,"insert into ".$todays_date." (C) values (".$get['sum(req_quan)'].")");
					}
				
				
				
				
					//echo $fetch1['sum(req_quan)'];
				
					mysqli_query($conn,"insert into ".$todays_date." (A) values (".$fetch1['sum(req_quan)'].")");*/
			
		
			
		}
		
		
		
		
	}
	
	/*echo"<div id='editor'>";
	echo"</div>";
	echo"<button id='cmd'>";
	echo"generate PDF";
	echo"</button>";*/
	
	
    if($flag!=1)
    {    
        $select=mysqli_query($conn,"select indent from indent where verified !='y' ");
		
        while($fe=mysqli_fetch_assoc($select))
	    {
		//echo $fe['indent']."<br>";
		  $updt=mysqli_query($conn," update indent set verified='y' where indent='".$fe['indent']."' ");
		
	    }
        
    }
   
	
	
}	
	?>

<script>


function myPrint()
		{	
		
			
			if (window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else 
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange=function()
			{
				if (this.readyState==4 && this.status==200)
				{
							
							var temp=document.body.innerHTML;
							
							document.body.innerHTML=
							"<html><head><title></title></head><body>" +
							this.responseText +"</body>";
							window.print();
		
							document.body.innerHTML=
							"<html><head><title></title></head><body>" +
							temp +"</body>";
				}
			}
			xmlhttp.open("GET","print_master.php?q="+document.getElementById('dt').value,true);
			xmlhttp.send();
	
	
	
		
		
		
		
	
	
	
	    }

function del()
		{	
		
			alert("hello");
			if (window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else 
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange=function()
			{
				if (this.readyState==4 && this.status==200)
				{
						alert(this.responseText);	
							
				}
			}
			xmlhttp.open("GET","delete.php?q="+document.getElementById('dt').value,true);
			xmlhttp.send();
	
	
	
		
		
		
		
	
	
	
	    }
    

</script>


</body>
<div class="container-fluid" >
      <div class="btn-group btn-group-justified">
  <a href="home.html" class="btn btn-warning" >Click Here To Redirect Homepage </a>
         </div>
	<form method="post">
	<div class="jumbotron" align="center">
	<h1> Master Indent </h>
		<br><input type='submit' name='Generate' value='Generate Master_Indent' class="btn btn-primary"><br>
		<h3 class"h3"> Please Click "Genarate Master_Indent" before entering date </h3>
		
	</form>

	<input type='text' name='date' id="dt" placeholder='YYYY/MM/DD' ><br><br>
	</div>
	<div class="jumbotron" align="center">
	<input type='submit' value='Print Master_Indent' onclick='myPrint();' class="btn btn-success"><br><br>
	    <input type='submit' value='Delete Master_Indent' onclick='del();' class="btn btn-danger">
		</div>
</div>



<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">BVIMIT 2018-2021</h5>
        <h6>Mitul Shelatkar </h6>
		<h6>MCA </h6>

      </div>
      <!-- Grid column -->

     <!-- <hr class="clearfix w-100 d-md-none pb-3"> -->

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">BVIMIT 2018-2021</h5>
          <h6>Shubham Metha </h6>
		<h6>MCA</h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> BVIMIT</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>