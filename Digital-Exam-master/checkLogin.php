<?php session_start(); ?>
<?php
$a=$_REQUEST["txtUser"];
$b=$_REQUEST["txtPass"];


include("dbConnect.php");

$rsUser=mysql_query("select * from user_info where username='$a'");
$rsuserid= mysql_fetch_array($rsUser);
if($a==null ||$b== null)
{
   header("location:loginForm.php?status=3");
}

else if(mysql_num_rows($rsUser)==0)
{
   header("location:loginForm.php?status=1");
}
else
{

	
	if($rsuserid["userpass"]==$b)	
	 {
		$_SESSION["user"]=$a;
		 if($rsuserid["usertype"]=="admin")
		 {
			
			header("location:adminHome.php"); 
		 }
		 else
		 {
			$_SESSION["usertype"]=$rsuserid["uid"];
			header("location:userHome.php"); 
		 }
	 }
	 else
	 {
		header("location:loginForm.php?status=2"); 
	 }
}

?>