<?php
 
  $y=$_REQUEST['qid']; 

       

   include("dbConnect.php"); 
   mysql_query("delete from  ques_info where quizid='$y'") or die("Not Deleted");
   
 
   
  header("location:adminHome.php");
     
?>
