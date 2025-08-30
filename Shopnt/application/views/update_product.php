<div>
    <?php
    
    
    ?>
    
    <h1 style="font-style: italic;color: #E13300;" align="center">Update YOUR product</h1>
    
        <form id="update" name="update" method="post" action="update_product_complete/<?php echo $product['0']['product_id'];?>" style="margin-top: 60px;">
        <table  align="center" style="width: 280px;">
            
            <tr >
        <td >
            <h3 style="font-style: italic;color: #ffffff; width: 100px;" align="center">price </h3>
        </td>
        <td style=" width: 100px;" >
            <input type="text" name="price" id="price" placeholder="Product price" value="<?php echo $product['0']['price'] ;?>" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 200px;" />
        </td>
        </tr>
         <tr>
        <td style="width: 100px;">
            <h3 style="font-style: italic;color: #ffffff;width: 20px;" align="center">description:-</h3>
        </td>
        <td style="width: 100px;">
            <input type="text" name="description" id="description" value="<?php echo $product['0']['product_description'] ;?>" placeholder="Product description" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 70px; width: 300px;" />
        </td>
         </tr>
     <tr>
         <td style="width: 100px;"></td>
             
           <td style="width: 100px;">
               <input type="submit" value="submit" style=" width: 70px;border-radius: 10px;background-color: cyan;margin-top: 20px;margin-left: 30px;"  /></td>
         </tr>
  
    
       
        </table>
    </form>
    </form>
    
    
    
</div>