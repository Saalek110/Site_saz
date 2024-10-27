<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<head>
<title>nazarat</title>


<style>
body {
               background-image: url('../images/flowers1.jpg');

      }

#news {
              background: gray;
              }
      
#ersal{
           background-color: #aaaa66ee;

      border: 5px solid black;
               border-radius: 25px;                          
     text-align: center;
     font-size: 25px;
         width:50%;
            margin-right:200px;
                margin-left:200px;
      font-family: 'helvetica neue', helvetica, arial, sans-serif;

}
#tab  {
  border: 5px solid black;
    width:90%;
       background-color: #999988;
         margin-left: 20px;
            margin-right: 30px;
              text-align: right;
      padding-right: 40px
	 border-spacing: 50px;
     font-size: 25px;
      background-color: #ccbbaa;
     border-left: 1px solid #ffffff;
         border-right: 1px solid #ffffff;
       border-top: 1px solid #ffffff;
           padding: 2px 8px;
            border-radius: 10px;
        }
#t1 {
   border: 5px solid black;
  width:2%;
     background-color: #999988;
                 margin-left: 20px;
                 margin-right: 30px;
     text-align: right;
       padding-right: 40px;
border-spacing: 50px;
    font-size: 25px;
    background-color: #88bbff;
  border-left: 1px solid #ffffff;
 border-right: 1px solid #ffffff;
              border-top: 1px solid #ffffff;
    padding: 2px 8px;
    border-radius: 10px;
    font-family: 'helvetica neue', helvetica, arial, sans-serif;
      }
#t2  {
border: 5px solid black;
width:45%;
background-color: #999988;
    margin-left: 20px;
 margin-right: 30px;
     text-align: right;
     padding-right: 40px
             border-spacing: 50px;
             font-size: 25px;
    background-color: #8899bb;
            border-left: 1px solid #ffffff;
border-right: 1px solid #ffffff;
border-top: 1px solid #ffffff;
    padding: 2px 8px;
     border-radius: 10px;
  font-family: 'helvetica neue', helvetica, arial, sans-serif; 
  }
#t3  {
         border: 5px solid black;
             width:10%;
      background-color: #999988;
          margin-left: 20px;
          margin-right: 30px;
           text-align: right;
           padding-right: 40px
        border-spacing: 50px;
           font-size: 25px;
background-color: #8899bb;
    border-left: 1px solid #ffffff;
        border-right: 1px solid #ffffff;
        border-top: 1px solid #ffffff;
      padding: 2px 8px;
             border-radius: 10px;
      font-family: 'helvetica neue', helvetica, arial, sans-serif;
 }
  #t4{
 background-color: #ffa500;
              width:10%;
  }   
    #t5{
 background-color: #ffa500;

    }   
 #counter{
 background-color: #ffa500;
              width:7%;
  border: 3px solid black;
           padding: 3px;
           font-size: 25px;
     text-align: center;

        }                                                                 
</style>
 </head>
<body>
<p id="demo"></p>

<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

       <?php
            require "../base/ccoonn.php";
          include "../functions/functions.php"; 
             require_once "../tools/jdf.php";
   session_start();
$post_number=$_GET['number'];
$number=$post_number;
 
//$link="../".".php";

   
   echo"<br>number_sss= ".$number;
    $str=writeMsg(7) ;
    
      
    
    //  echo "<a href='../../index.php'><img src='../../images/buttons/index.png'  style='width:200px;height:auto;'></a>"; 

if(      !isset  ($_POST['action_post'] )    )  
{
            // echo "<a href='$link'><img src='../images/buttons/return1.jpg'  style='width:400px;height:auto;'></a>"; 
}//ghable ersal msg
         if(      isset  ($_POST['action_post'] )    )  
         {
echo"abcdefgh";
echo"<br>action";
          if (  !isset(  $_SESSION["username"] )  )
 {          
       $name=test_input($_POST["name"]);
 }//if not member
           if (  isset(  $_SESSION["username"] )  )
 {          
       $name=$_SESSION["username"];
 }//if not member
    

    echo"<br>action_post";
echo"<br><br>";
 $str=writeMsg(82) ;

echo"<div id='ersal'>";
       echo"<center><h1>".$str."</h1></center>";
       echo"</div>";
       echo"<br><br>";

           //  echo "<center><a href='$link'><img src='../images/buttons/return1.jpg'  style='width:400px;height:auto;'></a></center>"; 



  $msg=test_input($_POST["msg"]);
  $post_number=test_input($_POST["post_number"]);
 
    
        
         date_default_timezone_set("Asia/Tehran");
        
          $the_date=jdate('Y/m/d ');  
        $the_week=jdate('l');  
          $hour= jdate('g:i A');                                         $time=$the_date.$the_week.$hour;                   echo"<br>msg= ".$msg;                             
  echo "<br>post_number= ".$post_number;
 $sql = "INSERT INTO `nazarat` (`number`,`poster`,`nazar` , `time`,`post_number`) VALUES (NULL,'$name','$msg','$time','$post_number')";
    $result = mysqli_query($ccoonn ,$sql);
 
         }//action post
            $str=writeMsg(8) ;
  
                   

 echo"<div id='para_total'>";// dddddddddii

//=========== print  =======================
         $str=writeMsg(44);
$sql = "SELECT * FROM posts WHERE  number=$number"; 
$result = mysqli_query($ccoonn ,$sql );
echo"<center>";          // ccccccccccccccccccccccccccc
echo"<table border=1>";      // tttttttttttttttttttttttttt
while($info = mysqli_fetch_array( $result ))
        {
     echo"<tr>";
    $number=$info['number'];
  
  //  $title=$info['title'];
     // $the_date=$info['the_date'];
        
            
     include"../parts_of_index/my_str_replace.php";
             $news=$info['news'];

echo"<tr><td id='t1'>";   echo $number;  echo"</td>";

echo"<td id='t2'>";    //lllllllllllllllllllllllllllllllllll


 echo"</td>";// llllllllllllllllllllllllllllllllll
echo"<td id='t4'>";  echo $the_date;   echo"</td><tr>";

echo"<tr><td colspan='4' id='t3'>";  
echo nl2br($news);  
 echo"</td></tr>";
echo"<tr><td colspan='4' id='t5'>"; 


  echo"</td></tr>";

             echo"</tr>";                                              } //while
echo"</table>";  // tttttttttttttttttttttttttt

  echo"</center>";   // cccccccccccccccccccccc
//=========================


//echo"post_number= ".$post_number;
if(      !isset  ($_POST['action_post'] )    )  
{
include"a_msg_form.php";    // ffffff
} // avale kaar 

//========== action post ===========
if(      isset  ($_POST['action_post'] )    )  
{ // add one text at end

}//end of action post
 
  


   $str=writeMsg(54);

 //=================ooooooooooooooooo


                 echo"<br>";
                 echo"<br>";

                        function test_input($data) {
                     $data = trim($data);
                    $data = stripslashes($data);
                     $data = htmlspecialchars($data);
                  return $data;
                                                                                     }               
                                                                                     
                                                                                     
    echo"</div>";   //dddddd

                                                                                        ?>
 </body>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  