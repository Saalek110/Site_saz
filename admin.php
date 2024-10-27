<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<head>
<title>saalek110</title>

<style>
body
{
background-color:rgba(220,220,200,1);
}

</style>


</head>
<body>
       <?php
    
    require "base/ccoonn.php";
     include "functions/functions.php"; 
     require_once "tools/jdf.php";
    mysqli_set_charset($ccoonn, "utf8");
    
                $hour= jdate('g:i A');   
                $the_week=jdate('l');
              $the_date=jdate('Y/m/d ');


 if (  isset(  $_SESSION["username"] )  )
 {
echo"<center>";
echo"Hi ".$_SESSION["username"];
echo"</center>";
 }//if sess
 if ( $_SESSION["username"]== "admin")
 {


echo'<table style="border:1; width:100%;">';  // first table
echo'<tr>';
echo'<td style="background: #55ff99;">';
 $str=writeMsg(21) ;
echo $str;
echo'</td>';
echo'<td style="background: #00ff00;">';
echo"Admin page";
echo'</td>';
echo'<td style="background: #ddff00;">';
//$count=counter(1);
 //$str=writeMsg(12);
 //echo $count;
  // echo $str;
  echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 

echo'</td>';

echo'</tr>';
echo'</table>';

echo'<table style="border:1;width:100%;text-align:center;">';// 2th table----------
echo'<tr>';
echo'<td style="background: #aa8888;">';
 
      writeMsg3("welcome");
      
echo'</td>';
echo'</tr>';
echo'</table>';//-----------------


  echo'<table border=4>';
echo'<tr>';
echo'<td style="background: #f6f899;">';


 echo'<table border=1>';
echo'<tr>';
echo'<td>';
echo'soton1';
echo'<img src="images/tools.png" alt="tools" width="100" height="60"/>';
echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(28) ;
 echo'<a href="index.php">'.$str.'</a>';
 echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(14) ;
//  echo'<a href="login/register.php">'.$str.'</a>';
   echo'</td>';
   echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(17) ;
 // echo'<a href="login/logout.php">'.$str.'</a>';
     echo'</td>';
     echo'</tr>';



echo'<tr>';
echo'<td>';
 $str=writeMsg(11) ;
//echo'<a href="editor/new_post96.php">'.$str.'</a>';
echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(10) ;
echo'<a href="admin/add_text.php">'.$str.'</a>';
echo'</td>';
echo'</tr>';

echo'</tr>';
echo'</table>';
	  
echo'</td>';
echo'<td>';
echo'<img src="images/admin_tools.jpg" alt="tools" width="280" height="240"/>';


 $str=writeMsg(27) ;// vasatttttttttttttttttttt
echo $str;

echo'</td>';
echo'<td style="background: #0f8899;">';

echo'<table border=1>';
echo'<tr>';
echo'<td>';
echo'soton3';
echo'<img src="images/admin.jpg" alt="admin" width="130" height="100"/>';

echo'</td>';
echo'</tr>';
echo'</table>';
	  
	  
echo'</td>';
echo'</tr>';
echo'</table>';
//------------- end of 3 culomn ---------	  

           echo"<br>";

echo'<table style="border:1;width:100%; background:#aabb44;">';// first footer table----------
echo'<tr>';
echo'<td style="background:#aa8899; width:50%; text-align: center;;">';
    // $str=writeMsg(19);
   // echo'<a href="http://saalek110.fast-page.org">'.$str.'</a>';
echo'</td>';
echo'<td style="background:#99ff55;width:10%;">';
echo"linke digar";
echo'</td>';

echo'</tr>';
echo'</table>';//-----------------
 

 echo'<table style="border:1;width:100%; ">';// first footer table----------
echo'<tr>';
 echo'<td style="background:#aa8899; width:20%; text-align: center;;">';
 if ( $_SESSION["username"]== "admin")
 {

 ?>
 
 <?php
 }//if admin
 echo'</td>';
  echo'<td style="background:#aa8899; width:20%; text-align: center;;">';
   if ( $_SESSION["username"]== "admin")
 {

 ?>


 <?php
 }//if admin
   echo'</td>';
  echo'<td style="background:#aa8899; width:20%; text-align: center;;">';
   echo"333";
 echo'</td>';
 echo'</tr>';


echo'<tr>';
   echo'<td>';
echo"admin";
   echo'</td>';

echo'</tr>';

echo'</table>';//-----------------

if(isset($_POST['action_1']))
{
  if (  isset($_POST['edits'])  )
    {
echo"checked";
  $sql = "UPDATE setting SET num=1 WHERE name='show_edit'";

 $result = mysqli_query($ccoonn ,$sql);
    }// if check1  he hed

  if (  !isset($_POST['edits'])  )
{
  $sql = "UPDATE setting SET num=0 WHERE name='show_edit'";
   $result = mysqli_query($ccoonn ,$sql);

}// if not cheched

}// if action 1


       function test_input($data) {
                                                             $data = trim($data);
 $data = stripslashes($data);
     $data = htmlspecialchars($data);
 return $data;
}                                     
 }  // if admin
?>

</body>
</html>