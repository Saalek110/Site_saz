<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<meta charset="UTF-8">
<head>
<title>edit post</title>
<style>
body
{
background-color:rgba(220,240,30,1);
}
</style>
</head>
<body>
<?php
 
   require "../base/ccoonn.php";
 
$post_number=7;
  //=========== daryafte post  =======================
    mysqli_set_charset($ccoonn, "utf8");

$sql = "SELECT * FROM posts WHERE  number=$post_number";
$result = mysqli_query($ccoonn ,$sql );
echo"<center>";              // ccccccccccccccccccccccccccc
 // echo"topics: ".$temp;  // maghalat
echo"<center>";              // ccccccccccccccccccccccccccc
while($info = mysqli_fetch_array( $result ))
        {
             $news=$info['news'];
 
        }//while

    echo"<br>";
    echo"<br>";

    include"my_buttons.php";

?>


<center>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
   <tr><td colspan=4> 

 post: <textarea id="mytextarea"  form="myform" name="news" rows="10" cols="70">
 <?php  echo $news;  ?>
 </textarea><br><br>
</td></tr>
<?php
  echo'<input type="hidden" id="custId" name="number"  value='.$post_number.'>';
   ?>
   
   <tr><td colspan=4> <center>
  <input type="submit"  name='action1' value="Submit"  style=" font-size:40px; height:90px; width:150px">   </center>  </td></tr>


 </center> </td></tr>
</form>
</center>
</table>
</center>
<?php

 if(isset($_POST['action1']))   // add one text at end
 {// if action
echo"action";
        $post_number=test_input($_POST["number"]);   
               $news=test_input($_POST["news"]);
     mysqli_set_charset($ccoonn, "utf8");

     $sql = "UPDATE posts SET news='$news' WHERE number=$post_number";


 $result = mysqli_query($ccoonn ,$sql);


 }// if action

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
 function test_input($data) {
                    $data = trim($data);
                     $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                           return $data;
                           }
?>
</body>
</html>
