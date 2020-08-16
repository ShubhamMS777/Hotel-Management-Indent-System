<?php
	include 'db.php';
	
	
	$ip = file_get_contents('http://api.ipify.org');
	echo "<input type='hidden' name='ip' id='ip' value='$ip'>";
	
?>



<html>
	<head>
	
		<script>
		
		function call_getI()
            {
				
				var xhttp = new XMLHttpRequest();
               // document.getElementById(id_to_update)
                
               // alert("hi");
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                       // document.getElementById("ip").innerHTML = this.responseText;
                        
                       //alert(this.responseText);
						
                    }
					else
					{
						//alert("error:"+this.responseText);
					}
                 
                };
                xhttp.open("POST","https://upscale-shapes.000webhostapp.com/get_ip.php?ip="+document.getElementById("ip").value,true);
                xhttp.send();
            }
		
		
		
		</script>
	
		<title>
		
				Requistion Form
		</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
 <link rel="stylesheet" href="css/bootstrap.css">
 <script src="js/bootstrap.js"></script>
	
	</head>
	<style>
	
		input[type=text], select 
		{
			//width: 100%;
			//padding: 12px 20px;	
			margin: 8px 0;
			//display: inline-block;
			border: 2px solid #7FFFD4;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=submit]
		{
			/*width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: 2px solid #7FFFD4;
			border-radius: 4px;
			cursor: pointer;
		}

input[type=submit]:hover {
  background-color: #45a049;
}*/
	
		
	
	</style>
	
	<body onload="call_getI();">
	
	 <div id="trial">

		..
	 </div>
	 <div class="btn-group btn-group-justified">
  <a href="home.html" class="btn btn-warning" ><marquee>Click Here To Redirect Homepage</marquee> </a>
         </div>
	<div class="container-fluid">
	    
  <div class="jumbotron">
    <h1>Welcome To BVCHTMS Indent System</h1> 
    <!-- <p>Indent System is used for Indenting and maintaining record of <br>Indents of BVCHTMS College.</p> -->
  </div>
</div>
		<div class="container-fluid">
		<!--<table class="table table-bordered">
			<tr>
				<td	align='center' colspan="7">-->
					
						
							
								<form method="post">
								
									 <div class="form-group">
									<!--	<input type="text" name="num" style='width:100%' id="num" placeholder="Enter the no. of items" class="form-control">-->
									
										
									 
										<input type="hidden" name="todays_date" id="todays_date">
									</div>
									
									<select name="cat">
										<option value="grocery">Grocery</option>
										<option value="chicken">Chicken</option>
										<option value="vegetable">Vegetable</option>
                                        <option value="fish">Fish</option>
                                        <option value="meat">Meat</option>
										<option value="chapati">Chapati</option>
										<option value="milk">Milk Items </option>
									</select>
									
									
									
									
									
									
									<input type="submit" class="btn btn-outline-info"  name="sub_num" id="sub_num" value="Generate" onclick="today()">
									 
								</form>	
								
								
							
							<!--
							<table border=1 class='table'>	
							<tr>
							<td>
							<div id="div">
								 
								<input type="text" list="indent_list" id="mylist" placeholder='Search Indent.' onchange="showUser(this.value);" onclick="disappear();">
								<datalist id="indent_list">
									
									<?php
										/*
										$get_Inos="select indent from indent";
										$run_get_Inos=mysqli_query($conn,$get_Inos);
										
										while($fetch=mysqli_fetch_assoc($run_get_Inos))
										{
											echo"<option value='$fetch[indent]'>";
											echo $fetch['indent'];
											echo"</option>";
												
										}
										*/
									?>
									
									
								
								</datalist>
							
							
								
							</div>
								
							</td>
							<td>
							<button id="MyButton" class="btn btn-outline-info">Refresh</button>
							<button id="MyP" class="btn btn-outline-info" onclick="myPrint();">Print</button>
							</td>
							</tr>
							</table>	-->
							
						
					
					
					
					
			<!--	</td>
				
			</tr>
		</table>	-->
			<?php
				if(isset($_POST['sub_num']))
				{
					
					
					
				//	$number=$_POST['num'];
					$number=1;
					$dt=$_POST['todays_date'];
					echo"<form method='post' action='' id='prospects_form'>";
					if($number=='')
					{
						echo"<script>";
							echo"alert('Please enter the no of items');";
						echo"</script>";
					}
					else
					{
						
						echo"<input type='hidden' name='cat_type' value='".$_POST['cat']."'>";
						echo"
							<div class='table-responsive' id='content'>
							<table id='mytb' class='table '>
							
							<tr>
								<th>Indent No:</th>
								<th width='100%'><input type='text' name='Ino' id='Ino' required></th>
							</tr>
						
							<tr>
								<th>From:</th>
								<td>
									<select name='kitchen_type'>
										<option value='ATK'>ATK</option>
										<option value='BTK'>BTK</option>
										<option value='QTK'>QTK</option>
                                        <option value='FAB'>F&B</option>
                                        <option value='AO'>AO</option>
										<option value='OS'>OS</option>
										<option value='HK'>HK</option>
									</select>
								</td>
							</tr>
						
						    <tr>
								<th>Required By :</th>
								<td><input type='text' name='faculty' id='faculty' placeholder='Faculty Name'></td>
							</tr>
						
							<tr>
								<th>Required on:</th>
								<td><input type='date' name='req_date' id='req_date' placeholder='YYYY-MM-DD' required ></td>
							</tr>
							
							
							
							<tr>
								<th>Category:</th>
								<td>
									'".$_POST['cat']."'
								</td>
							</tr>
						
						
						
							<tr>
								<th>Sr. No.</th>
								<th>ITEMS</th>
                                <th>Unit</th>
								<th>Required Quantity</th>
								<th>Rate Per Unit</th>
								<th>Amount(Rs)</th>
							</tr>
							
						";	
								
						for($i=0;$i<$number;$i++)
						{
							
							
							
							$c=$i+1;
							
							
							
							echo"<tr>";
								echo "<td>";
									echo "<input type='text' name='srno[]' value='$c'>";
								echo"</td>";
								
								echo "<td>";
								
										
										echo "<input type='text' name='item[]' id='item[]'  list='pname'  onfocusout='getPrice(this.value,$c)'>";
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
										/*echo "<select name='degree[]'>";
											echo"<option value='kg'>";
												echo "kg";
											echo"</option>";
											
											
											echo"<option value='grams'>";
												echo "grams";
											echo"</option>";
											
											
											echo"<option value='litre'>";
												echo "litre";
											echo"</option>";
										
										echo"</select>";*/
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
									
										echo "<input type='text' name='amount[]' id='$c' onfocus='cal_amount(this.id);' autocomplete='off' onfocusout='insertRow()'>";
									
								echo"</td>";
									
									
								
							echo"</tr>";
								
								
								
								
									
								
							}
							
							echo"<table id='mytb2'>";
							
							echo"</table>";
							
								echo"<tr>";
								
								
									echo"<td align='center'  colspan='7'>";
									
										echo"<input type='hidden' value='$number' name='number' id='number'>";
										echo"<input type='hidden'  value='$dt' name='todays_date'>";
										
										
										echo"<input type='submit'  style='width:100%' href='home.html' class='btn btn-outline-danger' name='sub' value='SUBMIT' onclick='myFunction();'>";
										
										
									echo"</td>";
									
								echo"</tr>";
								
								
							}//else complete
							
							echo "</table>";
							echo"</div>";
							echo"</form>";
						
					}
					$my_flag=0;
					if(isset($_POST['sub']))
					{
						
						$num=$_POST['number'];
						$r=mysqli_query($conn,"select indent from indent where indent=".$_POST['Ino']."");
						if(mysqli_num_rows($r)==0)
						{
							
							
							$insert_in="insert into indent(indent,kitchen_type,todays_date,required_on,faculty)
							values('".$_POST['Ino']."','".$_POST['kitchen_type']."','".$_POST['todays_date']."','".$_POST['req_date']."','".$_POST['faculty']."')";
						
							//echo $insert_in;
							$run_indent=mysqli_query($conn,$insert_in);
					
							echo $insert_in;
							if($run_indent)
							{
								
							}	
							else
							{
							
								echo mysqli_error($conn);
			
							}
						}
						else
						{
								echo '<script>';
									echo 'alert("You are adding data to an existing Indent")';
								echo '</script>';
								
								$my_flag=1;
								$r1=mysqli_query($conn,"select * from product where indent=".$_POST['Ino']."");
								$updated_count=mysqli_num_rows($r1);
								$updated_count++;
						}
							for($i=0;$i<$num;$i++)
							{
								
								
								
								
								
								if($my_flag==0)
								{
									if($_POST['item'][$i]!='')
									{
										$query="insert into product(id,indent,items,degree,req_quan,rate,amount,issued,s_rate,s_amount,category)values
										('".$_POST['srno'][$i]."','".$_POST['Ino']."','".$_POST['item'][$i]."','".$_POST['degree'][$i]."','".$_POST['req_quan'][$i]."','".$_POST['rate'][$i]."','".$_POST['amount'][$i]."','".$_POST['req_quan'][$i]."','".$_POST['rate'][$i]."','".$_POST['amount'][$i]."','".$_POST['cat_type']."')";
									
									
										
										$run=mysqli_query($conn,$query);
									}
                                }
								else
								{
									if($_POST['item'][$i]!='')
									{
										$query="insert into product(id,indent,items,degree,req_quan,rate,amount,issued,s_rate,s_amount,category)values
										('".$updated_count."','".$_POST['Ino']."','".$_POST['item'][$i]."','".$_POST['degree'][$i]."','".$_POST['req_quan'][$i]."','".$_POST['rate'][$i]."','".$_POST['amount'][$i]."','".$_POST['req_quan'][$i]."','".$_POST['rate'][$i]."','".$_POST['amount'][$i]."','".$_POST['cat_type']."')";
									
										
										
										$run=mysqli_query($conn,$query);
										$updated_count++;
									}
									
								}
							}
                        
                        
                            //echo mysqli_error($conn);
					
							
			
					
					
					}
					
					

					
					
					
				
				
				
				
				?>
			
		
		
		
		
				
					<div id="txtHint"></div>
                    <div id="temp"><h1><marquee>  </marquee></h1></div>
				
		</div>
		
		
	
	</body>
	
	
	
	<script>
        
            function update_issued(new_value,id_to_update,indent)
            {
               
                
               
                document.getElementById("s_amount."+id_to_update).value=document.getElementById("s_rate."+id_to_update).value*document.getElementById(id_to_update).value;
                var xhttp = new XMLHttpRequest();
                //var id_to_update="issued."+id_to_update;
                
                //alert(id_to_update);
               // document.getElementById(id_to_update)
                
                
                //issued*rate per unit
                /*document.getElementById("s_amount."+checkBox.value)=document.getElementById(checkBox.value)*document.getElementById("s_rate."+checkBox.value);*/
               
                
                 
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                               
                        
                        document.getElementById("temp").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "update(issued).php?new_value="+new_value+"&id="+id_to_update+"&indent="+indent+"&new_s_amount="+document.getElementById("s_amount."+id_to_update).value,true);
                xhttp.send();
            }
        
        
        
            function update_remark(new_value,id_to_update,indent)
            {
                var xhttp = new XMLHttpRequest();
               // document.getElementById(id_to_update)
                
               // alert("hi");
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("temp").innerHTML = this.responseText;
                        
                        //alert(this.responseText);
                    }
                    
                };
                xhttp.open("GET", "update(remark).php?new_value="+new_value+"&id="+id_to_update+"&indent="+indent,true);
                xhttp.send();
            }
        
        
        
            function update_srate(new_value,id_to_update,indent)
            {
                
               document.getElementById("s_amount."+id_to_update).value=document.getElementById(id_to_update).value*document.getElementById("s_rate."+id_to_update).value;
                var xhttp = new XMLHttpRequest();
               // document.getElementById(id_to_update)
                
               // alert("hi");
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("temp").innerHTML = this.responseText;
                        
                        //alert(this.responseText);
                    }
                };
                xhttp.open("GET", "update(srate).php?new_value="+new_value+"&id="+id_to_update+"&indent="+indent+"&new_s_amount="+document.getElementById("s_amount."+id_to_update).value,true);
                xhttp.send();
            }
        
        
			function today()
			{
				//	alert("hello");
				var today = new Date();
				var dd = String(today.getDate()).padStart(2, '0');
				var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
				var yyyy = today.getFullYear();
				var current = yyyy + '/' + mm + '/' + dd;
				document.getElementById("todays_date").value=current;
			}
        
        
        
             function remark(id) 
             {
                var checkBox = document.getElementById(id);
                //var text = document.getElementById("text");
                if (checkBox.checked == true)
                {   
                   
                    //alert(checkBox.value);
                    document.getElementById("Remark."+checkBox.value).disabled=false;
                    document.getElementById("s_rate."+checkBox.value).disabled=false;
                    document.getElementById(checkBox.value).disabled=false;//for issued quantity
                    document.getElementById("s_amount."+checkBox.value).disabled=false;
                    //  text.style.display = "block";
                    
                } 
                else 
                {
                    document.getElementById("Remark."+checkBox.value).disabled=true;
                    document.getElementById(checkBox.value).disabled=true;//for issued quantity
                   // document.getElementById(checkBox.value).value="";
                    document.getElementById("s_rate."+checkBox.value).disabled=true;
                    document.getElementById("s_amount."+checkBox.value).disabled=true;
                }
            }
			
			
			
			function myFunction() 
			{
				//alert("Adding indent");
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
						document.getElementById("indent_list").innerHTML=this.responseText;
						//location.replace("home.html");
					}
				}
				xmlhttp.open("GET","temp.php",true);
				xmlhttp.send();

			}
			
			function disappear()
			{
					document.getElementById("mytb").style.display="none";
				
			}
			
			
			
			function showUser(str) 
			{
				//alert("hello");
				if (str == "")
				{
					document.getElementById("txtHint").innerHTML = "";
					//alert("emoty");
				} 
				else
				{ 
					//alert("not empty");
				//	document.getElementById("mytb").style.display="none";
					
					if (window.XMLHttpRequest)
					{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} 
					else 
					{
							// code for IE6, IE5
							xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					
					
					
						xmlhttp.onreadystatechange = function() 
						{
							//alert("trying....");
							
							if (this.readyState == 4 && this.status == 200) 
							{
								//document.getElementById("mytb").style.display="none";
								document.getElementById("txtHint").innerHTML = this.responseText;
								//alert("creating table");
								
							}	
							
						};
						xmlhttp.open("GET","getuser.php?q="+str,true);
						xmlhttp.send();
					}
					
				}
				
				
				function change_verified()
				{
                    
                    cbox=document.getElementById('chkbox');
                    
                    if(cbox.checked)
                    {
                        
                        str='n';
                    }
                    else
                    {
                        str='y';        
                    }
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
							//document.getElementById("rate_"+num).value=this.responseText;
						}
					}
					xmlhttp.open("GET","update(verified).php?q="+str+"&indent="+document.getElementById('id_no').value,true);
					xmlhttp.send();
					
					
					
	
				}



				
				function getPrice(str,num)
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
							document.getElementById("rate_"+num).value=this.responseText;
						}
					}
					xmlhttp.open("GET","perunit.php?q="+str,true);
					xmlhttp.send();
					
					
				}
				
				function cal_amount(str)
				{
					/*var alpha='a';
					var alpha2='b';
					var temp=q;
					var req;
                   // str=document.getElementById;
					if(str=='')
					{
							alert("Please fill the required quantity");
					}
					else
					{
							temp=alpha+q;
							req=alpha2+q;
							document.getElementById(temp).value=document.getElementById(req).value*document.getElementById(q).value;
									
					}*/
					
				
                    document.getElementById(str).value=document.getElementById("quan_"+str).value*document.getElementById("rate_"+str).value
					
				}
				
				
		
		
		function myPrint()
		{	
		
			alert("hi"+document.getElementById("mylist").value);
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
			xmlhttp.open("GET","Printing.php?q="+document.getElementById("mylist").value,true);
			xmlhttp.send();
	
	
	
		
		
		
		
	
	
	
	    }
		
		
		var count=1;
		function insertRow()
		{
				
				count++;
				
				
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
						
							//alert(document.getElementById("number").value);
							//document.getElementById("mytb").innerHTML+=this.responseText;
							var x=document.createElement("TR");
							x.setAttribute("id","row"+count);
							x.setAttribute("class","table-striped");
							x.innerHTML=this.responseText;
							document.getElementById("mytb").appendChild(x);
							document.getElementById("number").value=count;
							
							
							
						}
					}
					xmlhttp.open("GET","newrow.php?q="+count,true);
					xmlhttp.send();

		}
		
		
				
				
				
		</script>
			
		<script>
			$("#MyButton").click(function() {
			alert('Indent list Refreshed');
			$("#div").load(" #div > *");
			}); 
		</script>
		
		
		<script>
		$("#prospects_form").submit(function(e) {
			
			if(confirm("Are you sure you want to submit??")!=true)
			{
				e.preventDefault();
			}
		});
	
	
	</script>
		
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
  <div class="footer-copyright text-center py-3">© 2019 Copyright:BVIMIT

  </div>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</html>