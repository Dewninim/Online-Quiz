<?php include 'header.php'; ?>
   
<div class="container">


      <div id="adminTopDiv">
          <?php
	          include("adminMenu.php");
	       ?>        
      </div><!--end of topDiv-->
    
      <div id="adminBottomDiv">

<?php
 $con=@mysql_connect("127.0.0.1","root","");
   @mysql_select_db("digitalexam",$con);
   
   
   $totalRecPerPage=10;
   
   $rs=mysql_query("select count(*) from user_info");
   
   $row=mysql_fetch_array($rs);
   
   $totalRec=$row[0];
   

   
   $noOfPages=ceil($totalRec/$totalRecPerPage);
   
   
   
   
   if(isset($_REQUEST['pgno']))
   {
	  $start=   ($_REQUEST['pgno']-1) * $totalRecPerPage;
   }
   else
   {
	  $start=0;   
   }
   
   
   
   $rs=mysql_query("select * from user_info order by uname limit $start , $totalRecPerPage ");
   $sl=0;
   echo("<table border='1' id='quiztable' cellpadding='10px' cellspacing='0px'>");


   echo("<tr>");
      echo("<th>");
      echo("Sr No");
      echo("</th>");

      echo("<th>");
      echo("User Name");
      echo("</th>");

      echo("<th>");
      echo("Email");
      echo("</th>");

     echo("<th>");
     echo("Mobile No");
     echo("</th>");

      echo("<th>");
      echo("User Type");
      echo("</th>");

     echo("<th>");
     echo("Status");
     echo("</th>");
 echo("</tr>");
   while($row=mysql_fetch_array($rs))
   {
 
    echo("<tr>");
         echo("<td>");
              echo(($start++)+1);
         echo("</td>");

         echo("<td>");
              echo($row["uname"]);
         echo("</td>");

         echo("<td>");
              echo($row["uemail"]);
         echo("</td>");

         echo("<td>");
              echo($row["umobile"]);
         echo("</td>");

         echo("<td>");
              echo($row["usertype"]);
         echo("</td>");

         echo("<td>");
               $userid= $row["uid"];
               echo("<a href='deleteuser.php?uid=  $userid' >Delete</a>");
         echo("</td>");
         
    echo("</tr>");
    



   }
   echo("</table>");
   
   
   echo("<div id='pagingno'>");
   for($i=1;$i<=$noOfPages;$i++)
   {
       
	   echo("<a href='adminUser.php?pgno=$i'>".$i."</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
       
    }
    echo("</div>");
   
?>



</div><!--end of bottomDiv-->

          
</div><!--end of container1-->
<?php include 'footer.php'; ?>
