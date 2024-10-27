<?php
//<button type="button" onclick="test('[Img][/Img]')">Img</button>
$link_img="[Img]".$link."[/Img]";


?>
 <script type='text/javascript'> 
 
function test(str){  
       var tc = document.getElementById("mytextarea");  
    var tclen = tc.value.length;  
    tc.focus();  
    if(typeof document.selection != "undefined")  
    {  
      document.selection.createRange().text = str;    
    }  
    else  
    {  
      tc.value = 
      tc.value.substr(0, tc.selectionStart) +
      str +
      tc.value.substring(tc.selectionStart, tclen);
    }  
}  

function test2(str){  
    str='imagenumber='+str+'size='+200+'☆☆☆☆T'
       var tc = document.getElementById("mytextarea");  
    var tclen = tc.value.length;  
    tc.focus();  
    if(typeof document.selection != "undefined")  
    {  
      document.selection.createRange().text = str;    
    }  
    else  
    {  
      tc.value = 
      tc.value.substr(0, tc.selectionStart) +
      str +
      tc.value.substring(tc.selectionStart, tclen);
    }  
}  


function test4(str){  
    str='pngnumber='+str+'sizep='+200+'☆☆☆☆T'
           var tc = document.getElementById("mytextarea");  
    var tclen = tc.value.length;  
        tc.focus();  
           if(typeof document.selection != "undefined")  
          {
      document.selection.createRange().text = str;    
          }  
    else  
    {
              tc.value = 
                    tc.value.substr(0, tc.selectionStart) +
              str +
             tc.value.substring(tc.selectionStart, tclen);

    }
}
</script> 
<!--//$link-->  
 
<center>
<table>
<tr>
<td>

<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[font5][/font]')">f5</button>

</td>
<td>
 <button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[bgcolor]#ff0000[color_m]---[/color]')">bg red</button>

</td>
<td>
 <button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[bgcolor]#0000ff[color_m]---[/color]')">bg blu</button>

</td>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[left][/left]')">left</button>
</td>


</tr>
<tr>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[font10][/font]')">f10</button>

</td>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[font20][/font]')">f20</button>

</td>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[font60][/font]')">f60</button>


</td>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[font80][/font]')">f80</button>


</td>

</tr>
<tr>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[font100][/font]')">f100</button>

</td>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[font200][/font]')">f200</button>


</td>
<td>

 <button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[center][/center]')">center</button>

</td>
<td>
---10

</td>


</tr>
<tr>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[right][/right]')">right</button>
</td>
<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[red][/red]')">red</button>
</td>
<td>
 
 <button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[bgcolor]#00ff00[color_m]--[/color]')">bgcolor</button>
 
</td>
<td>
   <img src="images/editor_img.jpg" height="120" size="120" alt="Img" style=" font-size:35px; height:55px; width:120px" onclick="test('[Img][/Img]')">
</td>

</tr>
<tr>

<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[bgcolor]#ffff00[color_m][color]#ff0000[color_m]@@[/color][/color]')">bg cl</button>

</td>

<td>
 <button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[blue][/blue]')">blue</button>
</td>

<td>
<button type="button" style=" font-size:35px; height:55px; width:120px" onclick="test('[color]#00ff00[color_m]---[/color]')">color</button>
</td>

<td>
   <img src="images/editor_link.jpg" height="120" size="120" alt="link" style=" font-size:35px; height:55px; width:120px" onclick="test('[Url]http://ggg[Url_m]kkk[/Url]')">
</td>


</tr>
   
  

    
     
     