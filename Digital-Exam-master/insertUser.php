<?php
  $a=$_REQUEST["txtName"];
  $b=$_REQUEST["txtEmail"];
  $c=$_REQUEST["txtMobile"];
  $d=$_REQUEST["txtUser"];
  $e=$_REQUEST["txtPass"];        

   include("dbConnect.php");
   
 $rsUser=  mysql_query("select * from user_info where username='$d'");
   
   if($a==null ||$b== null||$c== null||$d== null||$e== null)
	{
      header("location:userRegistrationForm.php?status=3");
	}

   
   else if(mysql_num_rows($rsUser)==0)
   {
   
   mysql_query("insert into user_info(uname,uemail,umobile,username,userpass,usertype,regdate) values('$a','$b','$c','$d','$e','user',now())");
   
     header("location:userRegistrationForm.php?status=1");
   }
   else
   {
      header("location:userRegistrationForm.php?status=2");
   }
?>