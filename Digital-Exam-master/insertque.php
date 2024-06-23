<?php
          
    include("dbConnect.php");
    $txtques=$_REQUEST['txtques'];
$txtHideQId=$_REQUEST['txtHideQId'];
for ($i=0; $i<count($txtques); $i++){
  //echo $txtques[$i]."<br>";

  $a=$_REQUEST["txtques"][$i]; 
  $b=$_REQUEST["txtopt1"][$i];
  $c=$_REQUEST["txtopt2"][$i];
  $d=$_REQUEST["txtopt3"][$i];
  $e=$_REQUEST["txtopt4"][$i];
  $f=$_REQUEST["txtans"][$i];
  $g=$txtHideQId;
  
mysql_query("INSERT INTO ques_info(quizid, question, opt1, opt2, opt3, opt4,ans) VALUES ('$g', '$a','$b','$c','$d','$e','$f')");
}
header("location:adminHome.php");
?>
