<?php
    include('db.php');

    $updt="update product set s_rate='".$_GET['new_value']."',s_amount=".$_GET['new_s_amount']." where indent='".$_GET['indent']."' and id = '".$_GET['id']."'";
    $run_updt=mysqli_query($conn,$updt);


   
?>
	