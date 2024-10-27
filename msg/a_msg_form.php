
<?php

?>


<center><h2>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>


<?php

  echo'<input type="hidden" id="custId" name="post_number"  value="'.$post_number.'">';
  


 if (  !isset(  $_SESSION["username"] )  )
 {
?>
  name: <input type="text"    style="font-size: 24pt"  name="name" ><br><br>
<?php
 }
?>
    <textarea id="msg"    style="font-size: 16pt" name="msg" rows="25" cols="70">

     </textarea> 
     <br>
    
     <br>
      <input type="submit"  name='action_post' value="Submit"  style=" font-size:65px; height:150px; width:250px">
 </form>
 </h2></center>

<?php

?>