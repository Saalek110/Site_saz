<?php



function writeMsg( $number) {


global $ccoonn;

    echo"<br>";
    mysqli_set_charset($ccoonn, "utf8");
    
$sql = "SELECT my_text FROM texts WHERE number=$number ";
$result = mysqli_query($ccoonn ,$sql);

   while($info = mysqli_fetch_array( $result )) 
    { 
  $str=$info['my_text'];
    } 
return $str;

}//func
//========================================================  

function writeMsg2( $number) {


global $ccoonn;

    echo"<br>";
    mysqli_set_charset($ccoonn, "utf8");
  
$sql = "SELECT my_text FROM texts WHERE number=$number ";
$result = mysqli_query($ccoonn ,$sql);

   while($info = mysqli_fetch_array( $result )) 
    { 
  $str=$info['my_text'];
    } 
echo $str;

}//func
//=====================================
function writeMsg3( $text) {


global $ccoonn;

    echo"<br>";
    mysqli_set_charset($ccoonn, "utf8");
  
$sql = "SELECT my_text FROM texts where  comment='$text' ";
$result = mysqli_query($ccoonn ,$sql);

   while($info = mysqli_fetch_array( $result )) 
    { 
 $str=$info['my_text'];
    } 
echo $str;

}//func
//===================================

function counter( $number)    
 {//function
 global $ccoonn;

 $s=0;
 $sql = "SELECT * from counters WHERE number=$number  ";
 $result = mysqli_query($ccoonn ,$sql);
 while($info = mysqli_fetch_array( $result )) 
    { 
    $s=$info['count'] ;
    } 
$s=$s+1;
  $sql = "UPDATE counters SET  count=$s WHERE number=$number";
$result = mysqli_query($ccoonn ,$sql);  
return $s;
 }//function counter

//=================================
//============================================================================================
 function msg_cont($conn , $number )
  {// if action
      //  echo"payame shoma sabt shod";
        
$x=0;
 // echo "number= ".$number;
$sql = "SELECT  *  FROM nazarat WHERE post_number=$number";
 $result = mysqli_query($conn ,$sql);
while($info = mysqli_fetch_array( $result ))
        
        {
            $x=$x+1;
               }      
              return $x;
 //================ manager count 
 

  }//end function msg_cont
?>