
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<meta charset="UTF-8">
<head>
<title>add text</title>
<style>
body
{
background-color:rgba(220,220,200,1);
}
</style>
</head>
<body>
<?php
  
   require "../base/ccoonn.php";
       include "../functions/functions.php"; 

    mysqli_set_charset($ccoonn, "utf8");
    
$sql = "SELECT * FROM texts";
$result = mysqli_query($ccoonn ,$sql);
echo"<center>";              
echo"<table border=1>";     
   while($info = mysqli_fetch_array( $result))
   {
   echo"<tr>";
echo"<td>";   echo $info['number'];   echo"</td>";
echo"<td>";   echo $info['comment'];  echo"</td>";
echo"<td>";   echo $info['my_text'];  echo"</td>";
   echo"</tr>";

    } 
    echo"</table>";      //tttttttttttt

 $str=writeMsg(29) ;

 echo'<a href="../admin.php">'.$str.'</a>';
     echo"</center>";        //ccccccccc      

    echo"<br>";
    echo"<br>";
?>


<center>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
  number: <input type="text" name="number" ><br><br>
 comment: <input type="text" name="comment" ><br><br>
  text: <input type="text" name="text" ><br><br>

  <input type="submit"  name='action1' value="Submit">
</form>
</center>

<?php

 if(isset($_POST['action1']))   // add one text at end
 {// if action
echo"action";

  	$number=test_input($_POST["number"]);
	$comment=test_input($_POST["comment"]);
	$text=test_input($_POST["text"]);
//	mysql_query(“SET CHARACTER SET utf8″);
  //  mysqli_query($db, “SET NAMES utf8”);
    mysqli_set_charset($ccoonn, "utf8");
	$sql="INSERT INTO `texts` (`number`,`comment`,`my_text`) VALUES ('$number','$comment','$text')";
 $result = mysqli_query($ccoonn ,$sql);


 }// if action
 function test_input($data) {
                    $data = trim($data);
                     $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                           return $data;
                           }
?>
</body>
</html>

