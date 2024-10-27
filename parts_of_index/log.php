<?php


 if ( ! isset(  $_SESSION["username"] )  )   // username enterrrrrrrrrrrrrrrrrrrrrrr
   {  //not login userr noooooooooooooooooooooo
       //================= cookie ===== not login===========
     $cookie_name='uss2';
     echo"<br>";

      if(    $_COOKIE[$cookie_name]  =="j2"    )
       {

       echo "shoma logout kardid , ba har esmi mitavanid login konid";
 }
        if(    $_COOKIE[$cookie_name]  !="j2"    ) 
        {

     
          $_SESSION["username"]=$_COOKIE[$cookie_name];

}         
      
  //========= end of cookie =================== 
         echo "<h1>";  // hhhhh
        $temp=writeMsg(4);  // Register 
       echo $temp;
      echo "<a href='log/register.php'>register</a>"; echo"   ";
$temp=writeMsg(3);   //	Login
echo $temp;
         echo "<a href='log/login.php'>login</a>"; 
        echo "</h1>";  // hhhhhhhhh
        

     }// not login  userr nooooooooooooooo
      if (  isset(  $_SESSION["username"] )  )
   {  // login nnnnnnnnnnnnnnnnnnnnn
     
      echo "<h3>";
        echo "<a href='log/logout.php'><img src='images/buttons/logout.png'  style='width:40px;height:auto;'></a>"; 

       
   echo "</h3>";
   echo "   "; 
     // 
         echo "   "; 

     }//isset  loginnnnnnnnnnnnnnnnnnn

?>