<?php include 'header.php'; ?>
   
<div class="container">

<div id="userTopDiv">
          <?php
	          include("userMenu.php");
	       ?>        
      </div><!--end of topDiv-->
    
      <div id="userBottomDiv">
          <h3>Content</h3>
          
          <?php
           if(isset($_REQUEST['u']))
           {
	   
    		   echo"<div>";
			   if($_REQUEST['u']==1)
               echo("<div>HOME </div>");
			   
			   
	           else if($_REQUEST['u']==2)
			   echo("<div> HISTORY </div>");
			   
			   
	           else if($_REQUEST['u']==3)
			   echo("<div> RANKING</div>");
               echo'</div>';

           }
          ?>
          
          
      </div><!--end of bottomDiv-->
</div>

<?php include 'footer.php'; ?>
	 