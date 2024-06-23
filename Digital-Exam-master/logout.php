<?php 
if(session_id()=="" or session_id()==NULL)
{
   session_start(); 
   
}
   ?>

<?php

  unset($_SESSION["user"]);
  unset($_SESSION["usertype"]);
  session_destroy();
  header("location:index.php");
?>