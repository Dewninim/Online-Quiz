<?php
 
  $x=$_REQUEST["txtquizname"]; 
  $y=$_REQUEST["txtnq"];
  $z=$_REQUEST["txtquizdetails"];

       

   include("dbConnect.php"); 
   mysql_query("INSERT INTO quiz_info(quizname, quiztotalq, quizdetails, quizdate) VALUES ('$x', '$y','$z',now())") or die("Not Saved");

   $last_id=mysql_insert_id();
   header("location:adminchoice.php?ad2=7&last_id=".$last_id."&no_que=".$y);
     
?>
