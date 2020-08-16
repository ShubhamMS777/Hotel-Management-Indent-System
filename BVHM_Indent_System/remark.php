<?php
    include('db.php');

    $updt="update product set remark='".$_GET['new_value']."' where indent='".$_GET['indent']."' and id = '".$_GET['id']."'";
    $run_updt=mysqli_query($conn,$updt);


   
?>
							
						
						
						
					