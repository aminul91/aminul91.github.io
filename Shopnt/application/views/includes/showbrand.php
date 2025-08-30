<?php

$sql = "SELECT * FROM user ";
        $query = $this->db->query($sql);
         $result=$query->result_array();

        
?>

<div align = "center" style ="width:400px;height:200px;background-color:white;margin-top:700px;">
    <h2 align ="center" style="color: gold;">ALL BRAND SHOP</h2>
    
<table>
  
    
        <?php 

foreach($result as $row)
{
    ?>
    <tr>
    <td>
        <a href="<?php echo site_url('welcome/branddiv/'.$row['shop_id']);?>" style="text-decoration: none;">  <div style="width: 50px;height: 30px;margin-left:0px;background-color: palegreen;border-radius: 30px;" >
    
            <h5 align ="center"><?php echo $row['brand_name']; ?></h5>
            
            </div></a>
</td>
      
        
        </tr>
    <?php
     }
        ?>
</table>









</div>