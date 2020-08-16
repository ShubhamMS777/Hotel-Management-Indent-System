<?php
include 'db.php';
//echo "drop table ".$_GET['q']."";


$q="/".$_GET['q']."/";
$_date=str_replace("/","_",$q);


$run=mysqli_query($conn,"drop table $_date");
if($run)
{
    
    echo"success";
}
else
{
    
    //echo mysqli_error($conn);
    echo "drop table $_date";
}
?>