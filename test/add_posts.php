
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<meta charset="UTF-8">
<head>
<title>add post</title>
</head>
<body>
<?php
  
   require "../base/ccoonn.php";
  
    mysqli_set_charset($ccoonn, "utf8");

$sql = "SELECT * FROM posts";
$result = mysqli_query($ccoonn ,$sql);
echo"<center>";              
echo"<table border=1>";     
   while($info = mysqli_fetch_array( $result))
   {
   echo"<tr>";
echo"<td>";   echo $info['number'];   echo"</td>";
echo"<td>";   echo $info['news'];  echo"</td>";

   echo"</tr>";

    } 
    echo"</table>";
    echo"</center>";              

    echo"<br>";
    echo"<br>";
?>


<center>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
  
 news: <input type="text" name="news" ><br><br>
  

  <input type="submit"  name='action1' value="Submit">
</form>
</center>

<?php

 if(isset($_POST['action1']))   // add one text at end
 {// if action
echo"action";

  	
	$news=test_input($_POST["news"]);
	
    mysqli_set_charset($ccoonn, "utf8");
    	
	$sql="INSERT INTO `posts` (`news`) VALUES ('$news')";
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

