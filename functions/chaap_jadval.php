<?php
function chaap_jadval($name)
{

global $ccoonn;



$link_edit="editor/edit_post98.php";
    mysqli_set_charset($ccoonn, "utf8");
    
 $sql = "SELECT * FROM $name";
  $result = mysqli_query($ccoonn ,$sql);
   echo"<center>";          
    echo"<table border=1>";  
        while($info = mysqli_fetch_array( $result))
               {
            $my_number=$info['number'];
    echo"<tr>";
 echo'<td style="background: #999988; padding:5px;">';   
 echo $info["number"];   echo"</td>";

include"parts_of_index/my_str_replace.php";
echo'<td style="background: #aa9933; padding:10px;">';   echo $info["text"];  

         

echo"</td>";

          echo"</tr>";
 }
 echo"</table>";
  echo"</center>";      
                                                              }// fun tion chaap jadval                                                              ?>                                                        

