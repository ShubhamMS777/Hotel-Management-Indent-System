<html>

	<head>
	
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
 <link rel="stylesheet" href="css/bootstrap.css">
 <script src="js/bootstrap.js"></script>
	
	</head>
	
	
	
	
	<body onload="myFunction();">
	<div class="btn-group btn-group-justified">
		<a href="home.html" class="btn btn-warning" ><marquee>Click Here To Redirect Homepage</marquee> </a>
     </div>
	
	
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
	
	
	
	<div id="txtHint"></div>
	
	
	
	
	
	</body>

	
	
	
	<script>
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
				
						
			</script>

			<script>
			$("#MyButton").click(function() {
			alert('Indent list Refreshed');
			$("#div").load(" #div > *");
			}); 
		</script>
		
		<script>
		
		
			
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
						//location.replace("home.html");
					}
				}
				xmlhttp.open("GET","temp.php",true);
				xmlhttp.send();

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
		
		
		
		</script>
</html>