<?php
     $one_date=0;
        $file_wanted;
         $fileList = glob('./*');
     echo'<table border="1">';
foreach($fileList as $filename){//99
          echo'<tr><td>';
         if(is_file($filename)){//88
 $filename=  str_replace("./","",$filename);
    $thelink="http:/nnnnnnnnnn/xtest/".$filename;
    echo $thelink."<br>";

echo '<a href="' . $thelink . '">'.$filename.'</a>';
echo"<br>";
        
            //---------------
             if (file_exists($filename)) {//777
echo "<h6>$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));  echo"</h6>";
              echo "filetime= ".filemtime($filename);  echo"<br>";
              if ( filemtime($filename)   >  $one_date  ) 
        {//   $one_date=filemtime($filename);
               $file_wanted=$filename;
                  }
              }//777
    echo'</td></tr>';
      }//88   
      }//99
      echo'</table>';

                  echo"target - jadid tarin= ".$file_wanted;
                  echo"<br>"; echo"<br>"; echo"<br>";
                   echo "flag";
      $filename = 'uploads/logo.jpg';
      if (file_exists($filename)) {
   echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
                   }
       else{
           echo "<br>file not exist";      
             }                        
      

?>