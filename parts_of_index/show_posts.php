<?php
$link_edit="editor/edit_post98.php";
    mysqli_set_charset($ccoonn, "utf8");
    
 $sql = "SELECT * FROM posts";
  $result = mysqli_query($ccoonn ,$sql);
   echo"<center>";          
    echo"<table border=1>";  
        while($info = mysqli_fetch_array( $result))
               {
            $my_number=$info['number'];
    echo"<tr>";
 echo'<td style="background: #888844; padding:5px;">';   
 echo $info["number"];   echo"</td>";

include"parts_of_index/my_str_replace.php";
echo'<td style="background: #ccbb33; padding:10px;">';   echo $info['news'];  
$str="msg";
    echo "<a href='msg/a_write_msg.php?number=$my_number'>".$str."</a>"; 


$ebarat=writeMsg(30);
  $tedad=msg_cont($ccoonn , $my_number );
 if (   $tedad> 0)
 {
 $ebarat= $tedad." "."comment";  
    echo "<a href='msg/show_msgs.php?number=$my_number'>$ebarat</a>";


 }// if tedad
 $sql2 = "SELECT num FROM setting WHERE name='show_edit' ";
  $result2 = mysqli_query($ccoonn ,$sql2);
          while($info2 = mysqli_fetch_array( $result2))
          {
            $num=$info2['num'];

          }//while
if ( $_SESSION["username"]== "admin")
{

if ($num==1)
{
  echo'<form id="myform" action='.$link_edit.'  method = "POST">';
     echo'<input type="hidden" id="custId" name="number" 
         value="'.$my_number.'">';
         
  echo'<input type="submit"  name="a_edit" value="edit"  style=" font-size:14px; height:35px; width:60px">';     
     echo"</form>"; 
}// if num
}// if admin
echo"</td>";

          echo"</tr>";
 }
 echo"</table>";
  echo"</center>";      
                                                                 ?>                                                        

