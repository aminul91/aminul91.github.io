<?php
 $sql = "SELECT * FROM category_name";
        $query = $this->db->query($sql);
        $result = $query->result_array();

?>



<div class="container">
    <div class="row">
        <div class="col-md-3" ></div>
        <div class="col-md-6" >
        
        <form class="form1" id="cFrm" name="cFrm" method="post" action="myshop">
            
             <div class="col-lg-12">
                     <h1 style="font-style: italic;color: #FF4518;" >CREATE YOUR SHOP</h1>
                <div class="form-group">
                    <label for="InputName">Brand name</label>
                    <div class="input-group col-md-8">
                        <input type="text" class="form-control required" name="b_name" id="b_name" placeholder="YOUR SHOP/BRAND NAME" >
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Shop owner name</label>
                    <div class="input-group col-md-8">
                        <input type="text" class="form-control required"  name="o_name" id="o_name" placeholder="SHOP/BRAND OWNER NAME" required>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="text">Shop Location/address</label>
                    <div class="input-group col-md-8">
                        <input type="text" class="form-control required"  name="location" id="location" placeholder="SHOP location/address" required>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="text">Contact number</label>
                    <div class="input-group col-md-8">
                        <input type="text" class="form-control required"  name="c_number" id="c_number" placeholder="SHOP/BRAND Contact number" required>
                        
                    </div>
                </div>
                       <div class="form-group">
                    <label for="text">Contact email</label>
                    <div class="input-group col-md-8">
                        <input type="email" class=" email required" name="c_email" id="c_email" placeholder="Email for contact" required>
                        
                    </div>
                </div>
                       <div class="form-group">
                    <label for="text">Username</label>
                    <div class="input-group col-md-8">
                        <input type="text" class="form-control required" name="c_username" id="c_username" placeholder="You will log in your shop by this username" required>
                        
                    </div>
                </div>
                       <div class="form-group">
                    <label for="text">Password</label>
                    <div class="input-group col-md-8">
                        <input type="password" class="form-control required equalTo" id="password" name="password" placeholder="You will log in your shop by this password" required>
                        
                    </div>
                </div>
                        <div class="form-group">
                    <label for="text"> Confirm Password</label>
                    <div class="input-group col-md-8">
                        <input type="password" class="form-control required equalTo" id="c_password" name="c_password" placeholder="You will log in your shop by this password" required>
                        
                    </div>
                </div>
                     <div class="form-group">
                        <label for="text"> SHOP/ BRAND Category(product type)</label>  
                        <select name="category_id" id="category_id" class ="form-control required">
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
                     </div>
                      <div class="form-group">
                    <label for="text"> SHOP/ BRAND Description</label>
                    <div class="input-group col-md-8">
                        <textarea  class="form-control" name="shop_info" placeholder="Tell something about your shop(not mandatory)" ></textarea>
                        
                    </div>
                </div>
                     <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right" style="margin-right: 220px">
            </div>
    </div>
        </div>
        </form>
        
    </div>
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