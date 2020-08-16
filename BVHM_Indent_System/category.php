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
	
	
	
	<body>
	<div class="container-fluid">
	<div class="btn-group btn-group-justified">
  <a href="home.html" class="btn btn-warning" >Click Here To Redirect Homepage </a>
         </div>
		 <div align="center">
	<h3> Category </h3>
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
					<label for="pwd">&nbsp Select Kitchen &nbsp </label>
						<select class="form-control" placeholder="" name="k_type" id="k_type">
                            <option value="t">Total</option>
							<option value="ATK">ATK</option>
							<option value="BTK">BTK</option>
							<option value="QTK">QTK</option>
                            <option value="FAB">F&B</option>
                            <option value="AO">AO</option>
							<option value="OS">OS</option>
							<option value='HK'>HK</option>
							
							
						
						</select>
				</div>
				
				
				<div class="form-group">
			
					<label for="pwd">&nbsp Select Category &nbsp </label>
						<select class="form-control" name="cat_type" id="cat_type">
										<option value="grocery">Grocery</option>
										<option value="chicken">Chicken</option>
										<option value="vegetable">Vegetable</option>
                                        <option value="fish">Fish</option>
                                        <option value="meat">Meat</option>
										<option value="chapati">Chapati</option>
										<option value="milk">Milk Items </option>
						</select>
				
				
				
				
				</div>
				
				
				
			</form>
				
				<button type="submit" class="btn btn-outline-info" onclick="btnSubmit();">Submit</button>
				 <button id="MyPrint" class="btn btn-outline-info" onclick="myPrint();">Print</button>    
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
		var c_type = document.getElementById("cat_type").value;
		var print="no";
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
		xmlhttp.open("GET","cat.php?s_date="+s_date+"&e_date="+e_date+"&k_type="+k_type+"&c_type="+c_type+"&print="+print,true);
		xmlhttp.send();
		//alert("kitchen:"+k_type);
		
		
	}
	
	
	function myPrint()
		{	
		
			//alert("hi"+document.getElementById("mylist").value);
			var s_date = document.getElementById("start_date").value;
			var e_date = document.getElementById("end_date").value;
			var k_type = document.getElementById("k_type").value;
			var c_type = document.getElementById("cat_type").value;
			var print="yes";
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
			xmlhttp.open("GET","cat.php?s_date="+s_date+"&e_date="+e_date+"&k_type="+k_type+"&c_type="+c_type+"&print="+print,true);
		    xmlhttp.send();
	
	
	
		
		
		
		
	
	
	
	    }
	
	
	
	
	</script>
</html>