<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<head>
<title>saalek110</title>

<style>
</style>


</head>
<body>
       <?php
    require "../base/ccoonn.php";
     include "../functions/functions.php"; 
     require_once "../tools2/jdf.php";
     

           $hour= jdate('g:i A');       
           $the_week=jdate('l');  
          $the_date=jdate('Y/m/d ');  
            

   $str=writeMsg(2) ;
   echo "<center>".$str."</center>";
 
     echo"<br>";
          echo"<br>";

                             echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";
                             



       function test_input($data) {
                                                             $data = trim($data);
 $data = stripslashes($data);
     $data = htmlspecialchars($data);
 return $data;
}                                     

?>

</body>
</html>