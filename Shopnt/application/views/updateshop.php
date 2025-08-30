<?php
 $sql = "SELECT * FROM category_name";
        $query = $this->db->query($sql);
        $result = $query->result_array();

?>

<div class ="form">
      <h1 style="font-style: italic;color: #ffffff;margin-left: 300px;" >CREATE YOUR SHOP</h1>

    <form id="ufrm" name="ufrm" method="post" action="updateshop_complete">
    <table>
        <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Brand name </h3>
        </td>
        <td>
            <input type="text" class="required" name="b_name" id="b_name" value ="<?php if(isset($shop['0']['brand_name'])) echo $shop['0']['brand_name']; ?>" placeholder="YOUR SHOP/BRAND NAME" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
        </tr>
         <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Shop owner name</h3>
        </td>
        <td>
            <input type="text" class="required" name="o_name" id="o_name" value ="<?php if(isset($shop['0']['owner_name'])) echo $shop['0']['owner_name']; ?>" placeholder="SHOP/BRAND OWNER NAME" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;"  align="center">Shop Location/address</h3>
        </td>
        <td>
            <input type="text" class="required" name="location" id="location" value ="<?php if(isset($shop['0']['Location'])) echo $shop['0']['Location']; ?>" placeholder="SHOP location/address" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Contact number</h3>
        </td>
        <td>
            <input type="text" class="required" name="c_number" id="c_number" value ="<?php if(isset($shop['0']['contact_number'])) echo $shop['0']['contact_number']; ?>" placeholder="SHOP/BRAND Contact number" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Contact email</h3>
        </td>
        <td>
            <input type="text" class=" email required" name="c_email" id="c_email" value ="<?php if(isset($shop['0']['contact_email'])) echo $shop['0']['contact_email']; ?>" placeholder="Email for contact" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Username</h3>
        </td>
        <td>
            <input type="text" class="required" name="c_username" id="c_username" value ="<?php if(isset($shop['0']['user_name'])) echo $shop['0']['user_name']; ?>" placeholder="You will log in your shop by this username" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Password</h3>
        </td>
        <td>
            <input type="password" class=" required equalTo " id="password" value ="<?php if(isset($shop['0']['password'])) echo $shop['0']['password']; ?>" name="password" placeholder="You will log in your shop by this password" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
         <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Confirm Password</h3>
        </td>
        <td>
            <input type="password" class="equalTo required" id="c_password" name="c_password" value ="<?php if(isset($shop['0']['password'])) echo $shop['0']['password']; ?>" placeholder ="You will log in your shop by this password " style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
        <tr>
            <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">SHOP/ BRAND Category(product type)</h3>
            </td>
            <td>
                
              <select name="category_id" id="category_id" class ="required">
                   <option value="">Select One</option>
                  <?php
                    foreach($result as $row)
                    {
                 ?>
                            <option value="<?php echo $row['category_id']; ?> " <?php if($shop['0']['category_id'] == $row['category_id']) echo "selected";?>><?php echo $row['category_name']; ?></option>
                             
                          <?php
                              }
                          ?>
                        </select>
            </td>
            
            
            
            </tr>
         <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">SHOP/ BRAND Description</h3>
        </td>
        <td>
            <input type="text"  name="shop_info" value ="<?php if(isset($shop['0']['brand_des'])) echo $shop['0']['brand_des']; ?>" placeholder="Tell something about your shop(not mandatory)" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 60px; width: 300px;" />
        </td>
         </tr>
         
         <tr>
             
           <td>
               <input type="submit" value="submit" style=" width: 70px;border-radius: 10px;background-color: cyan;margin-left: 320px;margin-top: 40px;"  /></td>
         </tr>
    </table>
    
</form>
</div>

<script>
    $(function(){
        $('#ufrm'). validate({
            rules: 
                {
              
                password:
                    {
                    minlength: 6,
                    maxlength: 32
                },
                c_password:
                    {
                    equalTo:"#password"
                },
                /*i_re_email:
                  {
                    equalTo:"#i_email"
                }*/
            },
            messages:
                { 
              
                username:
                    {
                    usernameRule:"Username already exists."  
                },
                c_password: "Please enter the same password.",

               // i_re_email:"Please enter the same email id."
            }
        });
    });  
</script>