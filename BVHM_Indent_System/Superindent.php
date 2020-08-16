<html>

	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			
			<link rel="stylesheet" href="css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	
	
	
	<body onload="myFunction();">
	<div class="container-fluid">
	<div class="btn-group btn-group-justified">
  <a href="home.html" class="btn btn-warning" >Click Here To Redirect Homepage </a>
         </div>
		 <div align="center">
	<h3> Super Indent </h3>
	</div>
		<div class="container" style='' class="form-inline">
		
			<form class="form-inline" post="get">
				
				<div class="form-group">
					<label for="email">Start Date:</label>
						<input type="text" class="form-control"  placeholder="YYYY-MM-DD" name="start_date" id="start_date">
				</div>
				<div class="form-group">
					<label for="pwd">End Date:</label>
						<input type="text" class="form-control" placeholder="YYYY-MM-DD" name="end_date" id="end_date">
				</div>
				
				
				<div class="form-group">
					<label for="pwd">Select Kitchen:</label>
						<select class="form-control" placeholder="" name="k_type" id="k_type">
                            <option value="ATK">ATK</option>
							<option value="BTK">BTK</option>
							<option value="QTK">QTK</option>
                            <option value="FAB">F&B</option>
                            <option value="AO">AO</option>
							<option value="OS">OS</option>
							<option value='HK'>HK</option>
							
						
						</select>
				</div>
				
				
				
			</form>
				
				<button type="submit" class="btn btn-outline-info" onclick="btnSubmit();">Submit</button>
				 <button id="MyPrint" class="btn btn-outline-info" onclick="myPrint1();">Print</button>    
				<table border=1 class='table'>	
							<tr>
							<td>
							<div id="div">
								 
								<input type="text" list="indent_list" id="mylist" placeholder='Search Indent.' onchange="showUser(this.value);" onclick="disappear();">
								<datalist id="indent_list">
									
									<?php
										
										$get_Inos="select indent from indent";
										$run_get_Inos=mysqli_query($conn,$get_Inos);
										
										while($fetch=mysqli_fetch_assoc($run_get_Inos))
										{
											echo"<option value='$fetch[indent]'>";
											echo $fetch['indent'];
											echo"</option>";
												
										}
										
									?>
									
									
								
								</datalist>
							
								
							</div>
								
							</td>
							<td>
							<button id="MyButton" class="btn btn-outline-info">Refresh</button>
                            <button id="MyP" class="btn btn-outline-info" onclick="myPrint();">Print</button>    
							</td>
							</tr>
							</table>	
							
			
		</div>
		
		<div class='container' id="myDiv">
		
		
		</div>
		</div>
		

	</body>


	<script>
	function btnSubmit() 
	{
		var s_date = document.getElementById("start_date").value;
		var e_date = document.getElementById("end_date").value;
		var k_type = document.getElementById("k_type").value;
		
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
				document.getElementById("myDiv").innerHTML=this.responseText;
			}
		}
		xmlhttp.open("GET","createTable.php?s_date="+s_date+"&e_date="+e_date+"&k_type="+k_type,true);
		xmlhttp.send();
		//alert("kitchen:"+k_type);
		
		
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
								document.getElementById("myDiv").innerHTML = this.responseText;
								//alert("creating table");
								
							}	
							
						};
						xmlhttp.open("GET","getuser.php?q="+str,true);
						xmlhttp.send();
					}
					
				}
				
				
				function myFunction() 
			{
				alert("Adding indent");
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
					}
				}
				xmlhttp.open("GET","temp.php",true);
				xmlhttp.send();

			}

        
        
        
            function myPrint()
		  {	
		
			alert("hi");
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
        
        
        
        
        function myPrint1()
		  {	
		
			alert("hi");
            var s_date = document.getElementById("start_date").value;
		    var e_date = document.getElementById("end_date").value;
     		var k_type = document.getElementById("k_type").value;  
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
			xmlhttp.open("GET","createTable.php?s_date="+s_date+"&e_date="+e_date+"&k_type="+k_type,true);
			xmlhttp.send();
	
	
	
		
		
		
		
	
	
	
	    }
	
	
	
	</script>

	<script>
			$("#MyButton").click(function() {
			alert('Indent list Refreshed');
			$("#div").load(" #div > *");
			}); 
		</script>

</html>