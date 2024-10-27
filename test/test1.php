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




   $str=writeMsg(2) ;
   echo $str;
 
     echo"<br>";
          echo"<br>";

       function test_input($data) {
                                                             $data = trim($data);
 $data = stripslashes($data);
     $data = htmlspecialchars($data);
 return $data;
}                                     

?>

</body>
</html>