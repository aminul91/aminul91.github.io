
<div style="width:850px;height: 1000px;">
    <h2 align="center" style="color: lawngreen"> WELCOME TO YOUR SHOP " <?php echo $_SESSION['brand_name'];?>" </h2>
    <?php
  
    
    if($product == NULL)
        echo "<h4 align='center' style = 'color:red;'>THERE IS NO PRODUCT IN YOUR SHOP<br> PLEASE ADD IMAGE CLICKING THE BUTTON IN RIGHT SIDE BELOW</h4>";
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
    <div style="width: 80%;">
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
            <img src="<?php echo base_url().'/images1/'.$row['product_image']; ?>" style="height: 200px;width: 200px; background-color: #E13300;" />
            
        </div>
    <div style="height: 40px;width: 200px; background-color: #30c4c8">
        price :- <?php echo $row['price'];?> taka
    </div>
    <div style="height: 40px;width: 200px; background-color: #FFE1A7">
        product_ID:- <?php echo $row['product_id']; echo "<br>"?> 
    </div>
    <div>           
    <a  href="<?php echo site_url('welcome/delete/'.$row['product_id'].'/'.$row['shop_id']);?>" class="confirmation" style="text-decoration:none;"><button>DELETE</button></a>
    <a href="<?php echo site_url('welcome/update_product/'.$row['product_id']);?>" style="margin-left: 50px;text-decoration:none;"><button>UPDATE</button></a>
    </div> 
                 
            </td> 
    
        
        
        <?php
        if($p==3)
        {
               $p= 0;
            
            ?>
   
            </tr>
             <?php
          
        }
          
      }
        ?>
   
    </table>
    </div>

      
        <br/>
        <a href ="<?php echo site_url('welcome/login');?>" style="text-decoration:none;"> <div style="background-color: aqua;border-radius: 10px; width:100px;text-align:center;margin-left:350px;">logout</div></a> 
      
</div>
<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure You want to delete this product?');
    });
</script>

