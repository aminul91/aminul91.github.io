<?php
$id =  $_SESSION['shop_id'];
 $sql = 'SELECT * FROM `user` WHERE `shop_id` = "'.$id.'"  LIMIT 1';
        $query = $this->db->query($sql);
        $result = $query->result_array();
        $q =  $result['0']['category_id'];

          $sql = 'SELECT product_type_id,product_name FROM `product_name` WHERE `category_id` = "'.$q.'"';
            $query = $this->db->query($sql);
        $res = $query->result_array();
            
?> 
    <div id="form1">
          <?php
        $a1 = array('class' => 'welcome', 'id' => 'image_up');
   
    echo form_open_multipart('welcome/manage_shop',$a1);
      
     echo "<table><tr><td>";
     echo "<h4 style = 'color:white;'> New product price  </h4></td><td>";
    $a2=array('class'=>'required','name'=>'a_price','id' =>'a_price','placeholder'=>'Product Price');
     echo form_input($a2);
       echo "</td></tr>";
    
        echo "<tr><td>";
     echo " <h4 style = 'color:white;'>New product description (shortly)  </h4></td><td>";
     $a3=array('class'=>'required','name'=>'a_info','id' =>'a_info','placeholder'=>'product Information');
           
     echo form_input($a3);
         echo "</td></tr>";
        
     echo "<tr><td>";
     echo "<h4 style = 'color:white;'> Select New product image (max size 2000 pixel)  </h4></td><td>";
     $a4=array('class'=>'required','name'=>'userfile','id' =>'userfile');
    echo form_upload($a4);
       echo "</td></tr>";
      

?>  
     <tr><td>
      <h4 style = 'color:white;'>Select New product type  </h4></td><td>;    
    <select name="product_type_id" id="product_type_id" class ="required">
                   <option value="">Select One</option>
                  <?php
                    foreach($res as $row)
                    {
                 ?>
                            <option value="<?php echo $row['product_type_id']; ?> "><?php echo $row['product_name']; ?></option>
                             
                          <?php
                              }
                          ?>
                        </select>
         </td></tr>
    
        <?php
          echo "<br><br>";
           echo "<tr><td>";  
        echo form_submit('upload','Upload');
          echo "</td></tr></table>";
     echo form_close();
    ?>
    
    
    
    
</div>
<br/>
     <a href ="<?php echo site_url('welcome/login');?>" style="text-decoration:none;"> <div style="background-color: aqua;border-radius: 10px; width:100px;text-align:center;margin-left:350px;">logout</div></a> <br/>
<a href ="<?php echo site_url('welcome/back/1');?>" style="text-decoration:none;"> <div style="background-color: black; width:100px;text-align:center;color:red;margin-left:350px;" align="center">BACK</div></a> 
    <script>
    $(function(){
        $('#image_up'). validate({
          
          
        });
    });  
</script>