<?php session_start(); ?>
<?php
   if(isset($_REQUEST["qid"]))
   {
	  $quizidd=$_REQUEST["qid"];
   }
?>


<?php
   if(isset($_SESSION['usertype']))
   {
	  $USERID=$_SESSION['usertype'];
   }
?>





<?php include 'header.php'; ?>
   
<div class="container">


      <div id="adminTopDiv">
          <?php
	          include("userMenu.php");
	       ?>        
      </div><!--end of topDiv-->
    
      <div id="adminBottomDiv">


<?php
   $con=@mysql_connect("127.0.0.1","root","");
   @mysql_select_db("digitalexam",$con);
   
   
   
   
   
   $rs=mysql_query("select quesid, question, opt1, opt2, opt3, opt4 from ques_info where quizid=$quizidd ") or die("Database error");
   
   echo("<h2 align='center'>Quiz Name</h2>");
   echo("<form action='submitans.php'>");
   echo("<table border='1' id='quiztable' cellpadding='10px' cellspacing='0px' style=font-size:18px >");
   $sl=0;

   while($row=mysql_fetch_array($rs))
   {
        $sl++;
         
         echo("<tr style=font-weight:bold >");
               echo("<td width='50px'>");
                  echo($sl);
               echo("</td>"); 

               echo("<td > "); 
                   echo($row['question']);
               echo("</td>"); 
                        
         echo("</tr>");

         $qsid=$row["quesid"];
         echo("<tr>");
                echo("<td>"); 
                    echo("<input type='radio' name='$qsid' value='1' >");
                echo("</td>");

                echo("<td>") ;
                  
                    echo($row['opt1']);
                echo("</td>"); 
         echo("</tr>");

         echo("<tr>");
                echo("<td>"); 
                    
                    echo("<input type='radio' name='$qsid'  value='2' >");
                echo("</td>");

                echo("<td>") ;
                    echo($row['opt2']);
                echo("</td>"); 
         echo("</tr>");

         echo("<tr>");
                echo("<td>"); 
                    echo("<input type='radio' name='$qsid' value='3' >");
                echo("</td>");

                echo("<td>") ;
                    echo($row['opt3']);
                echo("</td>"); 
         echo("</tr>");

         echo("<tr>");
                echo("<td>"); 
                    echo("<input type='radio' name='$qsid'  value='4' >");
                echo("</td>");

                echo("<td>") ;
                    echo($row['opt4']);
                echo("</td>"); 
            
         echo("</tr>");

         echo("<tr >");
        
            echo("<td colspan='2'>");
                 echo("<hr id='quedisHR'>");
            echo("</td>");
     
         echo("</tr>");
        

   }             
         
   echo("</table>");
   echo("<input type='submit' value='Submit' id='quesbtn1' width='60px'>");
   echo("</form>");
   
   
?>

               
 </div><!--end of bottomDiv-->

          
</div><!--end of container1-->
<?php include 'footer.php'; ?>
