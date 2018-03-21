<?php
include("includes/connect.php");
if(isset($_GET['del'])){
 $delete_id=$_GET['del'];
    
    $delete_query="delete from posts where post_id='$delete_id'";
    if(mysql_query($delete_query)){
      echo "<script>alert('POST HAS BEEN DELETED')</script>";
        
        echo "<script>window.open('view_post.php','_self')</script>";
    }


}



?>