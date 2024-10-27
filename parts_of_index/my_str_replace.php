<?php
if (isset ($info['news']) )
{
     $info['news']=str_replace("qz","'",$info['news']);


     $info['news']=str_replace("[Img]","<img src='",$info['news']);
     $info['news']=str_replace("[/Img]","'>",$info['news']);

     $info['news']=str_replace("[Url]","<a href='",$info['news']);
     $info['news']=str_replace("[Url_m]","'>",$info['news']);
     $info['news']=str_replace("[/Url]","</a>",$info['news']);

     $info['news']=str_replace("[center]","<center>",$info['news']);
     $info['news']=str_replace("[/center]","</center>",$info['news']);

     $info['news']=str_replace("[left]","<div style='text-align: left;'>",$info['news']);
     $info['news']=str_replace("[/left]","</div>",$info['news']);

     $info['news']=str_replace("[right]","<div style='text-align: right;'>",$info['news']);
     $info['news']=str_replace("[/right]","</div>",$info['news']);

     $info['news']=str_replace("[red]","<span style='color: Red'>",$info['news']);
     $info['news']=str_replace("[/red]","</span>",$info['news']);

     $info['news']=str_replace("[blue]","<span style='color: Blue'>",$info['news']);
     $info['news']=str_replace("[/blue]","</span>",$info['news']);

     $info['news']=str_replace("[color]","<span style='color:",$info['news']);

     $info['news']=str_replace("[bgcolor]","<span style='background-color:",$info['news']);
    

     $info['news']=str_replace("[color_m]","'>",$info['news']);
     $info['news']=str_replace("[/color]","</span>",$info['news']);

     $info['news']=str_replace("imagenumber=","<img src='http://victory.rf.gd/web/images/attachs/f",$info['news']);


          $info['news']=str_replace("size=100",".jpg' width='100' height='auto'>",$info['news']);
               $info['news']=str_replace("size=150",".jpg' width='150' height='auto'>",$info['news']);
            
     $info['news']=str_replace("size=200",".jpg' width='200' height='auto'>",$info['news']);
          $info['news']=str_replace("size=250",".jpg' width='250' height='auto'>",$info['news']);
        $info['news']=str_replace("size=300",".jpg' width='300' height='auto'>",$info['news']);
        $info['news']=str_replace("size=350",".jpg' width='350' height='auto'>",$info['news']);
                    
     $info['news']=str_replace("size=400",".jpg' width='400' height='auto'>",$info['news']);
          $info['news']=str_replace("size=450",".jpg' width='450' height='auto'>",$info['news']);
             $info['news']=str_replace("size=500",".jpg' width='500' height='auto'>",$info['news']);
             $info['news']=str_replace("size=550",".jpg' width='550' height='auto'>",$info['news']);
             
     $info['news']=str_replace("size=600",".jpg' width='600' height='auto'>",$info['news']);
     $info['news']=str_replace("size=650",".jpg' width='650' height='auto'>",$info['news']);
       $info['news']=str_replace("size=700",".jpg' width='700' height='auto'>",$info['news']);
         $info['news']=str_replace("size=750",".jpg' width='750' height='auto'>",$info['news']);
            
     $info['news']=str_replace("size=800",".jpg' width='800' height='auto'>",$info['news']);


    $info['news']=str_replace("☆☆☆☆T","",$info['news']);
  //   '])
  
  
       $info['news']=str_replace("pngnumber=","<img src='http://victory.rf.gd/web/images/attachs/png/f",$info['news']);


          $info['news']=str_replace("sizep=100",".png' width='100' height='auto'>",$info['news']);
               $info['news']=str_replace("sizep=150",".png' width='150' height='auto'>",$info['news']);
            
     $info['news']=str_replace("sizep=200",".png' width='200' height='auto'>",$info['news']);
          $info['news']=str_replace("sizep=250",".png' width='250' height='auto'>",$info['news']);
        $info['news']=str_replace("sizep=300",".png' width='300' height='auto'>",$info['news']);
        $info['news']=str_replace("sizep=350",".png' width='350' height='auto'>",$info['news']);
                    
     $info['news']=str_replace("sizep=400",".png' width='400' height='auto'>",$info['news']);
          $info['news']=str_replace("sizep=450",".png' width='450' height='auto'>",$info['news']);
             $info['news']=str_replace("sizep=500",".png' width='500' height='auto'>",$info['news']);
             $info['news']=str_replace("sizep=550",".png' width='550' height='auto'>",$info['news']);
             
     $info['news']=str_replace("sizep=600",".png' width='600' height='auto'>",$info['news']);
     $info['news']=str_replace("sizep=650",".png' width='650' height='auto'>",$info['news']);
       $info['news']=str_replace("sizep=700",".png' width='700' height='auto'>",$info['news']);
         $info['news']=str_replace("sizep=750",".png' width='750' height='auto'>",$info['news']);
            
     $info['news']=str_replace("sizep=800",".png' width='800' height='auto'>",$info['news']);


    $info['news']=str_replace("☆☆☆☆T","",$info['news']);
  
       $info['news']=str_replace("[font5]","<div style='font-size:5px;'>",$info['news']);


       $info['news']=str_replace("[font10]","<div style='font-size:10px;'>",$info['news']);


       $info['news']=str_replace("[font20]","<div style='font-size:20px;'>",$info['news']);

       $info['news']=str_replace("[font30]","<div style='font-size:30px;'>",$info['news']);


     $info['news']=str_replace("[font40]","<div style='font-size:40px;'>",$info['news']);

     $info['news']=str_replace("[font50]","<div style='font-size:50px;'>",$info['news']);


     $info['news']=str_replace("[font60]","<div style='font-size:60px;'>",$info['news']);

       $info['news']=str_replace("[font70]","<div style='font-size:70px;'>",$info['news']);


     $info['news']=str_replace("[font80]","<div style='font-size:80px;'>",$info['news']);

     $info['news']=str_replace("[font90]","<div style='font-size:90px;'>",$info['news']);


     $info['news']=str_replace("[font100]","<div style='font-size:100px;'>",$info['news']);

     $info['news']=str_replace("[font150]","<div style='font-size:150px;'>",$info['news']);



     $info['news']=str_replace("[font200]","<div style='font-size:200px;'>",$info['news']);

     $info['news']=str_replace("[font250]","<div style='font-size:250px;'>",$info['news']);



     $info['news']=str_replace("[font300]","<div style='font-size:300px;'>",$info['news']);


     $info['news']=str_replace("[font350]","<div style='font-size:350px;'>",$info['news']);


     $info['news']=str_replace("[font400]","<div style='font-size:400px;'>",$info['news']);

       $info['news']=str_replace("[/font]","</div>",$info['news']);


}// if isset $info['news']
     ?>