<?php
	include 'db.php';
?>

<html>
  <head>
    <title>
	   Product Data
	   </title>
	   
	   
 <link rel="stylesheet" href="css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript"> 

function validt()
{
	if(document.prod.proname.value==" ")
	{
		alert("Please Dont Keep Empty Product Name");
		document.prod.proname.focus();
		return false;
	}
	
	if(document.prod.prorate.value==" ")
	{
		alert("Please Dont Keep Empty Product Price");
		document.prod.prorate.focus();
		return false;
	}
	
	return(true);
}



	function showHint(str) 
	{
		//alert("hello");
		if(str=='')
		{
			fun(document.getElementById("myselect").value);
		
		}
		if (str.length == 0) 
		{ 
			document.getElementById("txtHint").innerHTML = "";
			return;
		}
		else 
		{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
					document.getElementById("get_data").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "items.php?q="+str,true);
			xmlhttp.send();    
		}
	}
	
	function update_pname(val,id)
	{
		var xhttp = new XMLHttpRequest();
               // document.getElementById(id_to_update)
                
               // alert("hi");
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        //document.getElementById("temp").innerHTML = this.responseText;
                        
                        //alert(this.responseText);
                    }
                    
                };
                xhttp.open("GET", "update(pname).php?new_value="+val+"&id="+id,true);
                xhttp.send();
		
	
	}
	
	
	
	function update_category(val,id)
	{
		var xhttp = new XMLHttpRequest();
               // document.getElementById(id_to_update)
                
               // alert("hi");
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        //document.getElementById("temp").innerHTML = this.responseText;
                        
                        //alert(this.responseText);
                    }
                    
                };
                xhttp.open("GET", "update(category).php?new_value="+val+"&id="+id,true);
                xhttp.send();
		
	
	}
	
	
	function update_price(val,id)
	{
		var xhttp = new XMLHttpRequest();
               // document.getElementById(id_to_update)
                
               // alert("hi");
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        //document.getElementById("temp").innerHTML = this.responseText;
                        
                        //alert(this.responseText);
                    }
                    
                };
                xhttp.open("GET", "update(price).php?new_value="+val+"&id="+id,true);
                xhttp.send();
		
	
	}




</script>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, intial-scale=1">

	  </head>
<body>
      <div class="btn-group btn-group-justified">
  <a href="home.html" class="btn btn-warning" >Click Here To Redirect Homepage </a>
         </div>
  <form class="form-inline"method="post" name="prod" onsubmit="return(validt());>
    <div class="container-fluid">
  <div class="jumbotron">
    <h1>Product Entry Portal</h1> 
    <p>Enter the new product to enter in the system</p> 
  </div>


  <div class="form-group">
    <label for="prodname">Enter Product Name</label>
     <input type="text" id="pname" name="proname" placeholder="Product/Item" /><br><br>
  </div>  
  <br>
   <div class="form-group">
    <label for="ppro">Enter the price of product</label>
     <input type="text" id="rt" name="prorate" placeholder="Product Rate" /> <br><br>
	</div>  
   <br>	
	<div class="form-group">
	<label for="ppro">Category</label>
	 <select name="cat">
		<option value="grocery">Grocery</option>
		<option value="chicken">Chicken</option>
		<option value="vegetable">Vegetable</option>
        <option value="fish">Fish</option>
        <option value="meat">Meat</option>
		<option value="chapati">Chapati</option>
		<option value="milk">Milk Items </option>
	</select>
	
	</div> 
									
	 <br>
	 
	 
	 <input type="submit" name="prosub" class="btn btn-success" value="Submit Data"/>
	 <input type="reset" name="reset" class="btn btn-danger" value="Reset Data"/><br><br>
	 </form>
	 

   </div>
   
   
   <input class="search_input" type="text" name="" placeholder="Search..." onkeyup="showHint(this.value)">
	
	
	<div id="get_data">
		
		
	</div>
   
   
	 
  
<?php
if(isset($_POST['prosub']))
{

$ins_pro="insert into hm_product(pname,price,category)values('".$_POST["proname"]."','".$_POST["prorate"]."','".$_POST["cat"]."')";
$exe=mysqli_query($conn,$ins_pro);
  mysqli_close($conn);
}
else
{
	mysqli_error($conn);
}
?>


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

</body>
</html>