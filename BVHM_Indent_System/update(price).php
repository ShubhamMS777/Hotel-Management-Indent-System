<?php
    include('db.php');

    $updt="update hm_product set price='".$_GET['new_value']."' where id='".$_GET['id']."'";
    $run_updt=mysqli_query($conn,$updt);


   
?>