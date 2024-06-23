<?php include 'header.php'; ?>
   
<div class="container">


      <div id="adminTopDiv">
          <?php
	          include("adminMenu.php");
	     ?>        
      </div><!--end of topDiv-->
    
      <div id="adminBottomDiv">
          
      
          
          <?php
           if(isset($_REQUEST['ad']))
           {
	   
    		   echo"<div>";
               if($_REQUEST['ad']==1)
               echo("<div> 
                     HOME
                     
                   </div>");
			   
			   
	           else if($_REQUEST['ad']==2)
			   echo("<div> USER </div>");
			   
			   
	           else if($_REQUEST['ad']==3)
			   echo("<div> RANKING</div>");
               echo'</div>';
           }
          ?>
   
    <!--==============================================================================================================-->
          <?php
            if(isset($_REQUEST['ad1']))
             {
	   
    		   echo"<div>";
			   
           
  
			   
               if($_REQUEST['ad1']==5)
               
               echo("<div>
               
               <form action='insertquiz.php' method='get'>                 
               <table align='center' width='100px' id='addquiz'>

               <tr><td><h2 id='h1quizform'>Add New Quiz Here</h2></td></tr>
               <tr><td><input type='text' name='txtquizname'  placeholder='Enter Quiz Name'></tr></td>
               <tr><td><input type='text' name='txtnq' placeholder='No of Questions'></tr></td>
               <tr><td><input type='text' name='txtquizdetails' placeholder='Enter Quiz Details' > </td></tr>

               <tr><td><input type='submit' value='Next' class='formbtn'><input type='reset' value='Cancel' class='formbtn' > </tr></td>                                 
               </table>
               </form>
               
               
               </div>");
			   
			   
	           else if($_REQUEST['ad1']==6)
			   echo("<div> REMOVE QUIZ</div>");
               echo'</div>';
             }
          ?>

     <!--======================================================================================================-->


     <?php
           
           if(isset($_REQUEST['ad2']))
           
             
             {
                 echo"<div>";
       if($_REQUEST['ad2']==7){
       $no_ques=$_REQUEST['no_que'];
       $currentquizid=$_REQUEST['last_id'];
       
       ?>
       
       <div>
               
               
               <form action='insertque.php' method='get'>                 
               <table align='center' width='100px' id='addquiz'>

               <tr><td><h2 id='h1quizform'>Add Questions Here</h2></td></tr>
               <tr><td><hr id='queHR'></td></tr>
               <input type='hidden' name='txtHideQId' value="<?php echo $currentquizid; ?>">
        <?php for($i=1; $i<=$no_ques; $i++){ ?>
                  
               <tr><td><input type='text' name='txtques[]'  placeholder='Write the Question <?php echo $i; ?>'></td></tr>
               <tr><td><input type='text' name='txtopt1[]' placeholder='Option 1'></td></tr>
               <tr><td><input type='text' name='txtopt2[]' placeholder='Option 2'></td></tr>
               <tr><td><input type='text' name='txtopt3[]' placeholder='Option 3'></td></tr>
               <tr><td><input type='text' name='txtopt4[]' placeholder='Option 4'></td></tr>
               <tr><td><input type='text' name='txtans[]' placeholder='Ans: 1/2/3/4 ?'></td></tr>
               
               <tr><td><hr id='queHR'></td></tr>
               
               
        <?php } ?>



               <tr><td><input type='submit' value='Add' class='formbtn'><input type='reset' value='Cancel' class='formbtn' > </td></tr>                                 
               </table>
               </form>
               
               
             </div>
             <?php 
       }
             }
			   
           
          ?>
    

      </div><!--end of bottomDiv-->


</div>

<?php include 'footer.php'; ?>	 