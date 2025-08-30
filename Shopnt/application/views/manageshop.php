
<div class="container">
  <div class="row">
      
    <h2 align="center" style="color: lawngreen"> WELCOME TO YOUR SHOP  <?php echo $_SESSION['brand_name'];?> 
    
    </h2>
    <?php
  
    
    if($product == NULL)
    {
        ?>
    
    <h4 align='center' style = 'color:red;'>THERE IS NO PRODUCT IN YOUR SHOP<br> PLEASE ADD IMAGE CLICKING THE BUTTON IN RIGHT SIDE BELOW</h4>
    <?php
    
    }
    
    ?>
    <table style="float: right;">
        <tr><td>
    <a href="<?php echo site_url('welcome/myshop');?>" style="text-decoration:none;"><button style=" height: 200px;width: 150px;">CLICK here <br><br><br>To<br>Add more product in YOUR shop</button></a>
            </td>
        </tr>
        <tr><td><br><br><br><br><br></td></tr>
        <tr><td>
                 <a href="<?php echo site_url('welcome/updateshop');?>" style="text-decoration:none;"><button style="margin-top: 20px; height: 100px;width: 150px;margin-right: 10px;border-radius: 30px;">CLICK here to update your shop information.</button></a>
   
            </td>
        </tr>
    </table>
     <div class="col-lg-8">
            <?php $c=ceil(count($product)/3);
              $r=count($product);
              $k=0;
            for($i=0;$i<$c;$i++)
            {
                
            ?>
            <div class="row">
                <?php  
             for($j=0;$j<3;$j++)
             {
                 if($k<$r)
                 {
              ?>
        
                <div class="col-sm-4">
                    
                    <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1">
                <a href ="<?php echo site_url('welcome/fullshow/'.$product[$k]['product_id']);?>">
                  <img src="<?php echo base_url().'/images1/'.$product[$k]['product_image']; ?>" class="img-responsive" alt=""  /></a>                              
                  </div>
                
                   </div> 
                   <div><b> price:<?php echo $product[$k]['price'];?> taka</b></div>
                   
                 <div>
                 <a href="<?php echo $product[$k]['product_id'];?>">
       
                </div>
                   <div>           
    <a  href="<?php echo site_url('welcome/delete/'.$product[$k]['product_id'].'/'.$product[$k]['shop_id']);?>" class="confirmation" style="text-decoration:none;"><button>DELETE</button></a>
    <a href="<?php echo site_url('welcome/update_product/'.$product[$k]['product_id'].'/'.$product[$k]['shop_id']);?>" style="margin-left: 50px; text-decoration:none;"><button>UPDATE</button></a>
    </div> 
   		</div>
                    
                </div>
                <?php 
             }
              $k=$k+1;
             }
             
            
            }
             ?>
                
                
            </div>
                
            
            
        </div>

      
        <br/>
        <a href ="<?php echo site_url('welcome/login');?>" style="text-decoration:none;"> <div style="background-color: aqua;border-radius: 10px; width:100px;text-align:center;margin-left:350px;">logout</div></a> 
      
</div>
<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure You want to delete this product?');
    });
</script>

