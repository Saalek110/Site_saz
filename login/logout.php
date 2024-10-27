
<?php
session_start();
    session_unset();
    session_destroy();
?>


<html>
<head>
<title>logout</title>
</head>
       <?php
     require "../base/ccoonn.php";
      include "../functions/functions.php"; 
    
  
  echo'<body>';
   echo "<br>"; 

   echo"<center><h2>logout</h2></center>";
      

 
  setcookie("sth", "j2", time() + (86400 * 400), "/"); 

 echo "<br><br>"; 
    
	
	  echo "<h2>";  
 echo "<center><br><br>";
 $str=writeMsg(18); //logout sucessfull
 echo $str;
 echo "<br>";  
 
  echo " <a href='../index.php'>$temp</a>";
echo "<br>";
 echo "Please go to <a href='../index.php'>first page</a>";
  echo "</h2>";  

	
?>


</body>
</html>