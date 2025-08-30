<?php
 $sql = "SELECT * FROM category_name";
        $query = $this->db->query($sql);
        $result = $query->result_array();

?>

<div class ="form">
      <h1 style="font-style: italic;color: #ffffff;margin-left: 300px;" >Create Customer Profile</h1>

    <form id="cFrm" name="cFrm" method="post" action="myshop">
    <table>
        <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Name </h3>
        </td>
        <td>
            <input type="text" class="required" name="b_name" id="b_name" placeholder="YOUR SHOP/BRAND NAME" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
        </tr>
         <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Product quantity</h3>
        </td>
        <td>
            <input type="text" class="required" name="o_name" id="o_name" placeholder="SHOP/BRAND OWNER NAME" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Location/address</h3>
        </td>
        <td>
            <input type="text" class="required" name="location" id="location" placeholder="SHOP location/address" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Contact number</h3>
        </td>
        <td>
            <input type="text" class="required" name="c_number" id="c_number" placeholder="SHOP/BRAND Contact number" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Contact email</h3>
        </td>
        <td>
            <input type="text" class=" email required" name="c_email" id="c_email" placeholder="Email for contact" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Username</h3>
        </td>
        <td>
            <input type="text" class="required" name="c_username" id="c_username" placeholder="You will log in your shop by this username" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
          <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Password</h3>
        </td>
        <td>
            <input type="password" class=" required equalTo " id="password" name="password" placeholder="You will log in your shop by this password" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
         <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Confirm Password</h3>
        </td>
        <td>
            <input type="password" class="equalTo required" id="c_password" name="c_password" placeholder ="You will log in your shop by this password " style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;" />
        </td>
         </tr>
        <tr>
            <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Category(product type)</h3>
            </td>
            <td>
                
              <select name="category_id" id="category_id" class ="required">
                   <option value="">Select One</option>
                  <?php
                    foreach($result as $row)
                    {
                 ?>
                            <option value="<?php echo $row['category_id']; ?> "><?php echo $row['category_name']; ?></option>
                             
                          <?php
                              }
                          ?>
                        </select>
            </td>
            
            
            
            </tr>
         <tr>
        <td>
            <h3 style="font-style: italic;color: #ffffff;" align="center">Product Description</h3>
        </td>
        <td>
            <input type="text"  name="shop_info" placeholder="Tell something about your shop(not mandatory)" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 60px; width: 300px;" />
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
        $('#cFrm'). validate({
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