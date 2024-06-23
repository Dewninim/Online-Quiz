<?php include 'header.php'; ?>


<?php
   if(isset($_REQUEST['status']))
   {
	   
       echo"<div id='responseMsg'>";
	   if($_REQUEST['status']==1)
	    echo("User does not exist");
	   else if($_REQUEST['status']==2)
			echo("Incorrect Password");
	   else if($_REQUEST['status']==3)
			echo("Please enter Username and Password");
      echo'</div>';
   }
?>



<div class="myForm">
     <img src="images/cloud.png" id="signuplogo">
     <h1 id="h1signup">Login Now</h1>
     
     <form method="get" action="checkLogin.php">
     
       <input type="text" name="txtUser" class="input-box"  placeholder="Your Username ">
       <input type="password" name="txtPass" class="input-box" placeholder="Your Password ">
       <input type="submit" value="Ok" class="formbtn"> </td> <td> <input type="reset" value="Cancel" class="formbtn" > 
                                      
     
     
     
     </form>
   
</div><!--end of myForm-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>