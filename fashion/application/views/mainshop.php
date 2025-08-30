
<div >
   
    <h1 align="center" style="color: chartreuse">BRAND :- <?php echo $shop['0']['brand_name'] ;?> </h1>
    <h4 align="center" style="color: #FFE1A7">(Choice your product and contact with Brand with product ID)</h4>
    
    
     
    <div style="float: left;float: left;width: 700px;">
     <table>
         <tr>
      <?php  
        $p=0;
      //var_dump($product);
      count($product);

      foreach ($product as $row)
      {
          $p=$p+1;
          
        
        ?>
        
             <td style="padding-right: 20px;">
        <div style="height: 200px;width: 200px; background-color: #E13300;">
        <a href ="<?php echo site_url('welcome/fullshow/'.$row['product_id']);?>"><img src="<?php echo base_url().'/images1/'.$row['product_image']; ?>" style="height: 200px;width: 200px; background-color: #E13300;" /></a>
            
        </div>
    <div style="height: 40px;width: 200px; background-color: #30c4c8">
        <b> price :- <?php echo $row['price'];?> taka<br></b>
        <h5 style="margin-top: 5px;"> product_ID :- <?php echo $row['product_id'];?></h5>
    </div>
    <div style="height: 40px;width: 200px; background-color: #FFE1A7">
        <a href="<?php echo site_url('welcome/fullshow/'.$row['product_id']);?>"><button  style="margin-left:15px;background-color:mediumspringgreen;height:30px;border-radius: 5px;margin-top: 5px;"><b>See product description</b></button></a> 
    </div><br> 
    
            </td> 
    
        
        
        <?php
        if($p==3)
        {
            ?>
   
            </tr>
             <?php
             $p= 0;
        }
          
      }
        ?>
   
    </table>
    </div>
    <div style="background-color: navajowhite; width :280px;float: right;border-radius: 50px;margin-right: -150px;">
        <h3 align="center" >BRAND Description</h3>
        <table>
            <tr>
        <td><h5 style="margin-left: 20px;">Brand Location:-</h5>
            </td>
                <td>
                <?php echo $shop['0']['Location'];?>
                </td>
                 </tr>
                 <tr>
           
        <br/><td><h5 style="margin-left: 20px;" >Brand Contact no:-</h5>
            </td>
                <td>
                <?php echo $shop['0']['contact_number'];?>
                </td>
               </tr>
                    <tr>
        <td><h5 style="margin-left: 20px;">Brand Description:-</h5>
            </td>
                <td>
                <?php echo $shop['0']['brand_des'];?>
                </td>
                </tr>
         </table>
    </div>
   
</div>
