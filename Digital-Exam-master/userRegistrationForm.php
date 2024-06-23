<?php include 'header.php'; ?>
   

	 
<?php
   if(isset($_REQUEST['status']))
   {
	   
       echo"<div id='responseMsg'>";
	   if($_REQUEST['status']==2)
	      echo("Username Already Exist!!!!Choose Another Name");
	   else if($_REQUEST['status']==3)
			echo("Please fill-up the required fields");
	   else
			echo("Registered Successfully");
		
       echo'</div>';
   }
?>




<div class="myForm">
     <img src="images/cloud.png" id="signuplogo">
     <h2 id="h1signupform">Sign Up Now</h2>

     
   <form method="get" action="insertUser.php">
     
       <input type="text" name="txtName" class="input-box" placeholder="Your Name "> 
       <input type="text" name="txtEmail" class="input-box"  placeholder="Your Email "> 
       <input type="text" name="txtMobile" class="input-box"  placeholder="Your Mobile Number ">
       <input type="text" name="txtUser" class="input-box"  placeholder="Your Username ">
       <input type="password" name="txtPass" class="input-box" placeholder="Your Password ">
       <input type="submit" value="Ok" class="formbtn"> </td> <td> <input type="reset" value="Cancel" class="formbtn">                                  
     
     
   
   </form>
</div><!--end of myForm-->

<?php include 'footer.php'; ?>