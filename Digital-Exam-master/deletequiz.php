<?php
 
  $x=$_REQUEST['qid']; 

       

   include("dbConnect.php"); 
   mysql_query("delete from  quiz_info where quizid='$x'") or die("Not Deleted");
   
  
   
  header("location:deleteques.php?qid=$x");
     
?>
