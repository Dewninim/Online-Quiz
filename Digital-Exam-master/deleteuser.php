<?php
 
  $y=$_REQUEST['uid']; 

       

   include("dbConnect.php"); 
   mysql_query("delete from  user_info where uid='$y'") or die("Not Deleted");
   
 
   
  header("location:adminuser.php");
     
?>
