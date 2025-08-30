
<div style="width:850px; background-color: #CCC; ">
    
    <?php include 'application/views/includes/menu.php'; ?>
     <table>
         <tr>
      <?php  
        $p=0;
     
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
        product_description:- <?php echo $row['product_description']; echo "<br>"?> 
    </div>
                 
                 
       <div style="height: 40px;width: 200px; background-color: greenyellow">
        BRAND:- <?php 
        
        $sql = "SELECT * FROM `user` WHERE `shop_id` = ".$row['shop_id'] ;
        $query = $this->db->query($sql);
          $brand = $query->result_array();
         ?> 
        <a href="#" style="text-decoration: none"> <?php echo $brand['0']['brand_name']; echo "<br>"?></a>
       
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