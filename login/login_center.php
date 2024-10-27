<?php 
session_start();
?>
<html>

<head>
  <title>login_center</title>
  <meta charset="UTF-8">
  
</head>
       <?php
     require "../base/ccoonn.php";
      include"../functions/functions.php"; 
  echo'<body>';

 echo"<center>";
echo"login center";
echo"<br><br><br><br><br>";

$user_name =test_input( $_POST["username"] );
$user_pass =test_input( $_POST["password"]  );


$user_pass=md5($user_pass);



$mysql_qry = "select * from users where username= '$user_name' and password like '$user_pass' ";


echo"<br>";

$result = mysqli_query($ccoonn ,$mysql_qry);

if(mysqli_num_rows($result) > 0) {
  echo "<h1>";  
 echo "<center><br><br>";
 $str=writeMsg(15); //login sucessfull
 echo $str;
 echo "<br>";  
 $str=writeMsg(16);  //prease click to go first page
  echo $str;

 echo "<br>";
  echo " <a href='../index.php'>$temp</a>";
echo "<br>";
 echo "Please go to <a href='../index.php'>first page</a>";
 //=================================
$_SESSION["username"] =$user_name;
 
//----- cookie --------
setcookie("sth", $user_name, time() + (86400 * 120), "/"); // 86400 = 1 day
 
//  --- cookie ------
} // result>0
//======================================================
else {
echo "<h3>login not success</h3>";  echo "<br>";
unset($_SESSION['username']);
}
//--------------------------


  echo "</h1>"; 
 echo "</center>";




function test_input($data) {
  $data = trim($data);
    $data = stripslashes($data);
      $data = htmlspecialchars($data);
        return $data;
        }
        
?>

</body>
</html>