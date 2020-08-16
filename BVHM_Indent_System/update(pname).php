<?php
    include('db.php');

    $updt="update hm_product set pname='".$_GET['new_value']."' where id='".$_GET['id']."'";
    $run_updt=mysqli_query($conn,$updt);


   
?>
							
						
						
						
					