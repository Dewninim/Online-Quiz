<?php

include("dbConnect.php");

$res=$_REQUEST;
//echo(count($res)."<br>");

$mrks=0;
foreach($res as $a=>$b)
{
  $count=0;
  //echo($a."----".$b."<br>");
  
  $qwer=mysql_query("select * from ques_info where quesid='$a'");
  $asdf=mysql_fetch_array($qwer);
  $c_id=$asdf['quizid'];
 
  $correct_ans=$asdf['ans'];
  if($correct_ans==$b)
  {
      $count++;
      $mrks++;
  }
  else
  {

  }
  mysql_query("INSERT INTO result_info(uid, quizid, marks,date) VALUES ('00', '$c_id','$count',now())");
  
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
          echo("<h1 align='center'>");
          echo("Your Total Marks :&nbsp&nbsp".$mrks);
          echo("</h1>");
       ?> 
    </div>
</div>
<?php include 'footer.php'; ?>
	 






