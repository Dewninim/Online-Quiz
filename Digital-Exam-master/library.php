<?php
  include("dbConnect.php");
  function loadCombo($sql)
  {
	 $rs=mysql_query($sql);
	 while($row=mysql_fetch_array($rs))
	 {
		$x=$row[0];
		$y=$row[1];		
		echo("<option value='$x'>");
		
		echo($y);
		
    	echo("</option>");
		 
	 }
	  
  }
  
  function displayTable($sql,$delFlag,$pgName)
  {
	  $rs=mysql_query($sql);
	  
	  $rc=mysql_num_rows($rs);
	  $cc=mysql_num_fields($rs);
	  echo("<table border='1' id='quiztable' cellpadding='10px' cellspacing='0px'>");
	    echo("<tr>");
		  for($i=0;$i<=$cc-1;$i++)
		  {
			echo("<th>");
			 echo(mysql_field_name($rs,$i));
			echo("</th>");			  
		  }
		  if($delFlag==true)
		  {
			  echo("<th>");
			 echo("Status");
			echo("</th>");			  
		  }
		echo("</tr>");
		
		  for($i=0;$i<=$rc-1;$i++)
		  {
			echo("<tr>");
			
			  for($j=0;$j<=$cc-1;$j++)
			  {
				echo("<td>");
				   echo(mysql_result($rs,$i,$j));
				echo("</td>");   
			  }
			
		  if($delFlag==true)
		  {
			  $id=mysql_result($rs,$i,0);
			  echo("<th>");
			 echo("<a href='$pgName?delid=$id'>Delete</a>");
			echo("</th>");			  
		  }

			echo("</tr>");
			  
		  }
		
	   
	  echo("</table>");
	  
	  
  }

?>




















