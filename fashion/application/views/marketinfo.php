<?php

$p=count($market);

?>




<div style="height: 600px;background-color: #444;">
    <table style="border-color: #000;border: solid; ">
    <tr>
   
           
        <?php
        
          foreach ($market as $result)
        {
           
        ?>
     <div style = " background-color: #30c4c8;width: 200px ;height: 40px;">
        <?php 
        echo '<h3 style="color: white;">'.$result['market_name'].'</h3>';
        ?>
         
          </tr>
          <?php
        }
        ?>
          

          </tr>
                </div>
   
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
</table>