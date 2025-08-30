<?php

$sql = "SELECT shop_id,brand_name FROM user";
        $query = $this->db->query($sql);
        $result = $query->result_array();

?>



<div style="height:40px;background-color: black;">
   
    
    
    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="10"><div style="background-color: #30c4c8;width: 2000px;">
    
   
        <?php 
        foreach ($result as $row)
        {
        ?>
             <div style="float:left;margin-left: 10px;">
                 <a href="<?php echo site_url('welcome/branddiv/'.$row['shop_id']);?>" style="text-decoration: none;color: aqua"><?php  echo $row['brand_name']; 
        
          ?></a>
        </div>
            <?php
        }
            ?>
        </div></marquee> 


  
</div>