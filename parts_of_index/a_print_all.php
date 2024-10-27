<?php
include"a_print_a_css.php";
//================== colors ========================
$sql = "SELECT * FROM color_font WHERE number=$news_code"; 
 $result = mysqli_query($conn ,$sql );
 while($info = mysqli_fetch_array( $result ))
        {
            $number_color=$info['number_color'];
             $the_date_color=$info['the_date'];
              $title_color=$info['title'];
              $posts_color=$info['posts'];

             $nz1_color=$info['nazar1'];
             $nz2_color=$info['nazar2'];
            
//------------------------------------------------------
             $number_color2=$info['number_color2'];
             $the_date_color2=$info['the_date2'];
              $title_color2=$info['title2'];
              $posts_color2=$info['posts2'];

             $nz1_color2=$info['nazar1b'];
             $nz2_color2=$info['nazar2b'];
            
         //------------------------------------------------------
             $number_font=$info['number_font']."px";
             $the_date_font=$info['the_date_font']."px";
              $title_font=$info['title_font']."px";
              $posts_font=$info['posts_font']."px";

             $nazar1_font=$info['nazar1_font']."px";
             $nazar2_font=$info['nazar2_font']."px";
            
        }// wile colors
        
//=========================================oooooooooooooooooooooooooo
// new post link ÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
if (    $_SESSION["username"] ==$my_sess) 
{
                 $temp=writeMsg(78) ;
  $link="admin/w_new_post/new_post.php?ss=".$my_sess."&web=".$my_web_adr."&code=".$news_code;
 
 echo"<h1>";
 //echo"<a href= $link>".$temp."</a>";
 echo"</h1>";
          if (    $_SESSION["username"] ==$my_sess ) 
         {   // if sess
$link_temp="admin/w_new_post/new_post.php";
  echo'<form id="myform" action='.$link_temp.'  method = "POST">';
   // echo'<input type="hidden" id="custId" name="number" 
    // value="'.$number.'">';
     
   echo'<input type="hidden" id="custId" name="sess" 
    value="'.$my_sess.'">';
       echo'<input type="hidden" id="custId" name="code" 
           value="'.$news_code.'">';
        echo'<input type="hidden" id="custId" name="web" 
          value="'.$my_web_adr.'">';

              echo'<input type="submit"  name="action_edit" value="new post"  style=" font-size:35px; height:55px; width:320px">';     
        echo"</form>"; 
          }//  if sess //llllllllllllllllllllllllllllllllll
}  // new post link

//=========== print  =======================
         $temp=writeMsg(44);
       //  $sql = "SELECT * FROM news  ORDER BY number DESC limit 3" ; 

$sql = "SELECT * FROM news WHERE  kind=$news_code   ORDER BY number2 DESC"; 
     $result = mysqli_query($conn ,$sql );
echo"<center>";              // ccccccccccccccccccccccccccc
  echo"topics: ".$temp;
echo"<table border=1>";      // tttttttttttttttttttttttttt
while($info = mysqli_fetch_array( $result ))
        {
     echo"<tr>";
    $number=$info['number2'];
    $title=$info['title'];
      $the_date=$info['the_date'];
      $the_week=$info['the_week'];
       $the_hour=$info['the_hour'];
    $link=$info['link'];
    $showlink=$info['showlink'];
    // taghire text
    include"admin/tools2/my_str_replace.php";
    $news=$info['news'];

//echo"<td>";   echo $info['serial'];   echo"</td>";
echo"<td id='t_number' style='text-align:center;  font-size: $number_font; color:$number_color2; background-color: $number_color;'>";   echo $number;  echo"</td>";

echo"<td id='t_title' style='text-align:center; font-size: $title_font; color:$title_color2; background-color: $title_color;'>";   echo $title;   echo"</td>";


echo"<td id='t_date' style='text-align:center; font-size: $the_date_font; color:$the_date_color2; background-color: $the_date_color;'>";  echo $the_date; echo $the_week; echo $the_hour;  echo"</td><tr>";

echo"<tr><td id='t_posts' colspan='3' style='text-align:right; font-size: $posts_font; color:$posts_color2; background-color: $posts_color;'>";  
//echo nl2br($news);  
$tool=strlen($news);
$rest = substr($news, 0, -($tool-50000)  );  // returns "abcde"
echo nl2br($rest);  

//lllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
         if (    $_SESSION["username"] ==$my_sess ) 
         {   // if sess
$link_temp="./admin/w_edit/edit.php";
  echo'<form id="myform" action='.$link_temp.'  method = "POST">';
    echo'<input type="hidden" id="custId" name="number" 
     value="'.$number.'">';
     
   echo'<input type="hidden" id="custId" name="sess" 
    value="'.$my_sess.'">';
       echo'<input type="hidden" id="custId" name="code" 
           value="'.$news_code.'">';
        echo'<input type="hidden" id="custId" name="web" 
          value="'.$my_web_adr.'">';

              echo'<input type="submit"  name="action_edit" value="edit"  style=" font-size:35px; height:55px; width:120px">';     
        echo"</form>"; 
          }//  if sess //lllllllllllllllllllllllllllllllllllllllllllllllllllllll





if ($tool>50000)
{
    echo"....";

echo"<a  href='tools/study.php?post=$number&code=$news_code'>edameh</a>";
}
 echo"</td></tr>";
 
echo"<tr><td colspan='3' id='t_nz1' style='text-align:center; font-size: $nazar1_font; color:$nz1_color2; background-color: $nz1_color;'>"; 

$word=writeMsg(55);

  //   echo "<a href='msg/a_write_msg.php?number=$number&web=$my_web_adr'>Write comments</a>"; echo"<br>";

    echo "<a href='msg/a_write_msg.php?number=$number&web=$my_web_adr'>".$word."</a>"; 

 
  
  $word=writeMsg(56);
 // $number=23;
 $tedad=msg_cont($conn , $number );
 if (   $tedad> 0)
 {
 $ebarat= $tedad." "."comment";  
 
 //echo "<a href='msg/show_msgs.php?number=$number&web=$my_web_adr'>$ebarat</a>"; echo"<br>";
   $ebarat= $tedad." ".$word;  
    echo "<a href='msg/show_msgs.php?number=$number&web=$my_web_adr'>$ebarat</a>";

 }//if tedad
   echo"</td>";
    
echo"</tr>";    
                  }// while 
echo"</table>";  // tttttttttttttttttttttttttt

  echo"</center>";   // cccccccccccccccccccccc

?>