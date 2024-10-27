<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<head>
<title>Register</title>
</head>

       <?php
     require "../base/ccoonn.php";
      include"../functions/functions.php"; 
    echo '<body>';
      ?>




 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
<?php


echo "<br><br><br>"; 
echo "<h1>";

//======================================
echo "<center>";  // table center
echo "<table border=1>";   //==========  form   ========
echo "<tr>";
echo "<td>";
echo "<center>";  // ..........................bb
  echo"<center>";
  echo"name:<input type='text' name='name'><br>";
  echo"password: <input type='text' name='password'><br>";

  echo" <center><input type='submit' name='action'> </center>";
  echo"</form>";
echo "</center>";  // ..........................bb
echo "</td></tr>";
echo "</table >";   //=============================================
echo "</center>";  // table center
echo "<br>"; 

//========================================
echo "</h1>";  //ooooooooo

//---------------------------------------------------
 if(isset($_POST['action']))   // add one text at end
 {//action
 $name =test_input( $_POST["name"] );
$password =test_input( $_POST["password"]  );
 

 if (empty($name)   ) { //if empty
     echo"<center><h1><span style='color:red'>bayad yek naam vared konid</span></h1></center>";  
	 $error=1;
                      echo "<meta http-equiv='refresh' content='10'>"; 
                      
                        } //if empty

  
if (empty($password)) {//if empty
            echo"<center><h1><span style='color:red'>bayad yek password vared konid</span></h1></center>";  
	$error=1;
                      echo "<meta http-equiv='refresh' content='10'>"; 
                             }//if empty
 
                    
 $sql = "SELECT * FROM users WHERE username='$name' LIMIT 1";
   $result = mysqli_query($ccoonn ,$sql);
   $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $name) {
         echo"<center><h1><span style='color:red'>in naam  vojod darad.naame digari entekhab konid.</span></h1></center>";  
		 $error=1;
         echo "<meta http-equiv='refresh' content='10'>"; 
    }

  }// if exsist
 


  if ( $error==0)
 {//error 0
   $password=md5( $password);
  $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$name','$password')";
 $result = mysqli_query($ccoonn ,$sql);
 echo "<center><h1>--------------------------------</h1></center><br>"; 
 echo"<center><h2>"; 
writeMsg(7); // now you can do login.
echo" you can login now";
echo"</h2></center>"; 
   echo "<center><h1>naam= ".$name."</h1></center>"; 
    echo "<center><h1>password=  makhfi</h1></center>"; 

     echo "<center><h1>";  echo "<a href='login.php'>login</a>"; echo "</h1></center>";
}//erro 0

 }//action
function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
         return $data;
                           }
                                      
?>


</body>
</html>