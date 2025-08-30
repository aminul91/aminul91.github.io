<?php


?>



<div >
<div style="height: 400px;width: 400px; background-color: #E13300;margin-left:200px;margin-top:20px;">
        <img src="<?php echo base_url().'/images1/'.$product['0']['product_image']; ?>" style="height: 400px;width: 400px; background-color: #E13300;" />
          </div>   
       <div style="width:200px;height:50px;background-color:black;border-radius:30px;margin-left:300px;">
        <h3 style="color:white;"align ="center">PRICE:-<?php echo $product['0']['price'];  ?></h3>
        </div>
      <div style="width:300px; background-color:aqua;border-radius:30px;margin-left:250px;">
        <h5 align= "center" >Product description<br><?php echo $product['0']['product_description'];  ?></h5>
        </div>
    
    <div style="margin-left:350px;margin-top:20px;">
    
   <a href="<?php echo site_url('welcome/brandlist');?>"> <button  style="hieght:50px;border-radius:30px;">BACK TO Product list</button></a>
    </div>
   
    </div>
