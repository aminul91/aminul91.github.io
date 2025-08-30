
<script>
    $(function() {
        $( "#p_dob" ).datepicker({
            //dateFormat:'yy-mm-dd'
            dateFormat:'dd/mm/yy'
        });
    });
</script>
<style>
    #frm2{ float:left; width:100%; margin:10px 0px; }
    #frm3{ float:left; width:100%; margin:10px 0px;display:none; }
    #frm4{ float:left; width:100%; margin:10px 0px;display:none; }
    #country_state_visibility{ display:none; }
    #i_country_state_visibility{ display: none;  }
    #p_country_state_visibility{ display: none; }
</style>
<?php
$countryList = getCountryList();
$austateList = getStateList('AU');
?>
<div class="ragistation">
    <h1 class="title_h1">Edit my profile <span class="titleBox">[<a href="<?php echo BASEURL?>profile">Back</a>]</span></h1>
    <div class="idenity_type">
        <label class="idenity_label">
            <p>Idenity Type</p>
            <select name="user_type2" id="user_type" class="select_item_idenity" disabled="disabled">
                <option value="2" <?php if (isset($myProfile['user_type']) && $myProfile['user_type'] == 2) echo "selected"; ?>>Private seller</option>
                <option value="3" <?php if (isset($myProfile['user_type']) && $myProfile['user_type'] == 3) echo "selected"; ?>>Australian Dealer</option>
                <option value="4" <?php if (isset($myProfile['user_type']) && $myProfile['user_type'] == 4) echo "selected"; ?>>International Dealer</option>
            </select>
        </label>
    </div>   
    <div class="form_style">
        <form name="regFrm" id="frm2" class="frm" action="" method="POST" style="float:left;">  
            <input type="hidden" name="user_type" id="type_2" />
            <input type="hidden" name="p_country" id="p_country" value="AU"  />
            <h5 class="title_h5" id="seller_title_box">Private Seller</h5>
            <div >
                <label class="lable_style">
                    <span>Title</span>
                    <span>
                        <input class="form-control required" type="text" name="p_title" id="p_title" value="<?php if (isset($myProfile['title'])) echo $myProfile['title']; ?>" placeholder="Title" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>First name</span>
                    <span>
                        <input class="form-control required" type="text" name="p_fname" id="p_fname" value="<?php if (isset($myProfile['fname'])) echo $myProfile['fname']; ?>" placeholder="First name" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Surname</span>
                    <span>
                        <input class="form-control required" type="text" name="p_surname" id="p_surname" value="<?php if (isset($myProfile['surname'])) echo $myProfile['surname']; ?>" placeholder="Surname" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Date of Birth</span>
                    <span>
                        <input class="form-control required" type="text" name="p_dob" id="p_dob" value="<?php if (isset($myProfile['dob'])) echo date('d/m/Y',  strtotime($myProfile['dob'])); ?>" placeholder="Date Of Birth" />
                    </span>
                </label>

           
               
               
                <label class="lable_style">
                    <span>Street Address</span>
                    <span>
                        <input class="form-control required" type="text" name="p_street_address" id="p_street_address" value="<?php if (isset($myProfile['street_address'])) echo $myProfile['street_address']; ?>" placeholder="Street Address" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Town/City</span>
                    <span>
                        <input class="form-control required" type="text" name="p_city" id="p_city" value="<?php if (isset($myProfile['city'])) echo $myProfile['city']; ?>" placeholder="Town/City" />
                    </span>
                </label>
                
                <label class="lable_style">
                    <span>State</span>
                    <span>
                        <select name="p_state" id="p_state" class="select_item">
                            <option value="">Select One</option>
                             <?php 
                             foreach($austateList as $k => $v) 
                             { 
                             ?>
                                <option <?php if($myProfile['state'] == $k) echo 'selected'; ?>  value="<?php echo $k ?>"><?php echo $v ?></option>
                             <?php                              
                             } 
                             ?>                           
                        </select>
                    </span>
                </label>
                 <label class="lable_style">
                    <span>Postcode</span>
                    <span>
                        <input class="form-control required" type="text" name="p_postcode" id="p_postcode" value="<?php if (isset($myProfile['postcode'])) echo $myProfile['postcode']; ?>" placeholder="postcode" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Phone (Landline)</span>
                    <span>
                        <input class="form-control required" type="text" name="p_phone" id="p_phone" value="<?php if (isset($myProfile['phone'])) echo $myProfile['phone']; ?>" placeholder="+61 3 xxxx xxxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Mobile Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="p_mobile" id="p_mobile" value="<?php if (isset($myProfile['mobile'])) echo $myProfile['mobile']; ?>" placeholder="+61 4xx xxx xxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail</span>
                    <span>
                        <input class="form-control email required" type="text" name="p_email" id="p_email" value="<?php if (isset($myProfile['email'])) echo $myProfile['email']; ?>" placeholder="E-mail" disabled="disabled" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Password</span>
                    <span>
                        <input class="form-control equalTo" type="password" name="p_password" id="p_password" value="" placeholder="Password" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Confirm Password</span>
                    <span>
                        <input class="form-control equalTo " type="password" name="p_cpassword" id="p_cpassword" value="" placeholder="Confirm Password" />
                    </span>
                </label>

                <label class="lable_style margin-5">
                    <span>&nbsp;</span>
                    <span><button type="submit" onclick="submitForm2();" class="buttom">Update</button></span>
                </label>
            </div><!--###~~If User Type private seller~~###---->
        </form>



        <form name="australian" id="frm3" class="frm"  action="" method="POST" style="float:left;">
            <input type="hidden" name="user_type" id="type_3" />
            <h5 class="title_h5" id="a_seller_title_box">Australian Seller</h5>
            <div >
                <!--label class="lable_style">
                    <span>Profile name</span>
                    <span>
                        <input class="form-control required" type="text" name="a_username" id="a_username" value="<?php if (isset($myProfile['username'])) echo $myProfile['username']; ?>" placeholder="Profile name" />
                    </span>
                </label-->
                <label class="lable_style">
                    <span>Registered Buiness name</span>
                    <span>
                        <input class="form-control required" type="text" name="a_username" id="a_username" value="<?php if (isset($myProfile['username'])) echo $myProfile['username']; ?>" placeholder="Registered Buiness name" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Buiness A B N</span>
                    <span>
                        <input class="form-control required" type="text" name="a_business_abn" id="a_business_abn" value="<?php if (isset($myProfile['business_abn'])) echo $myProfile['business_abn']; ?>" placeholder="Buiness A B N" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Dealer Licence #</span>
                    <span>
                        <input class="form-control" type="text" name="a_dealer_licence" id="a_dealer_licence" value="<?php if (isset($myProfile['dealer_licence'])) echo $myProfile['dealer_licence']; ?>" placeholder="Dealer Licence #" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Street Address</span>
                    <span>
                        <input class="form-control required" type="text" name="a_street_address" id="a_street_address" value="<?php if (isset($myProfile['street_address'])) echo $myProfile['street_address']; ?>" placeholder="Street Address" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Town/City</span>
                    <span>
                        <input class="form-control required" type="text" name="a_city" id="a_city" value="<?php if (isset($myProfile['city'])) echo $myProfile['city']; ?>" placeholder="Town/City" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Postcode</span>
                    <span>
                        <input class="form-control required" type="text" name="a_postcode" id="a_postcode" value="<?php if (isset($myProfile['postcode'])) echo $myProfile['postcode']; ?>" placeholder="Postcode" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>State</span>
                    <span>
                        <select name="a_state" id="a_state" class="select_item">
                            <?php
                            if ($austateList) {
                                foreach ($austateList as $k => $v) {
                                    ?>
                                    <option value="<?php echo $k ?>"  <?php if (isset($myProfile['state']) && $myProfile['state'] == $k) echo "selected"; ?>><?php echo $v ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Business Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="a_phone" id="a_phone" value="<?php if (isset($myProfile['phone'])) echo $myProfile['phone']; ?>" placeholder="Business Phone" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Website</span>
                    <span>
                        <input class="form-control required" type="text" name="a_website" id="a_website" value="<?php if (isset($myProfile['website'])) echo $myProfile['website']; ?>" placeholder="Website" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Mobile Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="a_mobile" id="a_mobile" value="<?php if (isset($myProfile['mobile'])) echo $myProfile['mobile']; ?>" placeholder="+61 4xx xxx xxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail</span>
                    <span>
                        <input class="form-control email required" type="text" name="a_email" id="a_email" value="<?php if (isset($myProfile['email'])) echo $myProfile['email']; ?>" placeholder="E-mail" disabled="disabled"/>
                    </span>
                </label>

                <label class="lable_style">
                    <span>Password</span>
                    <span>
                        <input class="form-control equalTo" type="password" name="a_password" id="a_password" value="" placeholder="Password" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Confirm Password</span>
                    <span>
                        <input class="form-control equalTo" type="password" name="a_cpassword" id="a_cpassword" value="" placeholder="Confirm Password" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Contact Person</span>
                    <span>
                        <input class="form-control required" type="text" name="a_contact_person" id="a_contact_person" value="<?php if (isset($myProfile['contact_person'])) echo $myProfile['contact_person']; ?>" placeholder="Contact Person" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's position</span>
                    <span>
                        <input class="form-control required" type="text" name="a_position_contact_person" id="a_position_contact_person" value="<?php if (isset($myProfile['position_contact_person'])) echo $myProfile['position_contact_person']; ?>" placeholder="Your position" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="a_contact_person_phone" id="a_contact_person_phone" value="<?php if (isset($myProfile['contact_person_phone'])) echo $myProfile['contact_person_phone']; ?>" placeholder="+61 3 xxxx xxxxd" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's E-mail</span>
                    <span>
                        <input class="form-control email required" type="text" name="a_contact_person_email" id="a_contact_person_email" value="<?php if (isset($myProfile['contact_person_email'])) echo $myProfile['contact_person_email']; ?>" placeholder="Email" />
                    </span>
                </label>
                <label class="lable_style margin-5">
                    <span>&nbsp;</span>
                    <span><button type="submit" onclick="submitForm3();" class="buttom">Update</button></span>
                </label>
            </div><!--###~~If User Type Australian Business Account.~~###---->
        </form>






        <form name="international" id="frm4" class="frm" action="" method="POST" style="float:left;">
            <input type="hidden" name="user_type" id="type_4" />
            <h5 class="title_h5" id="i_seller_title_box">International Seller</h5>
            <div >
                <label class="lable_style">
                    <span>Registered Business or Company Name</span>
                    <span>
                        <input class="form-control required" type="text" name="i_business_company_name" id="i_business_company_name" value="<?php if (isset($myProfile['reg_business_name'])) echo $myProfile['reg_business_name']; ?>" placeholder="Registered Business or Company Name" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Business or Company ID Number</span>
                    <span>
                        <input class="form-control required" type="text" name="i_business_company_id_number" id="i_business_company_id_number" value="<?php if (isset($myProfile['business_company_id_number'])) echo $myProfile['business_company_id_number']; ?>" placeholder="Business or Company ID Number" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Address 1</span>
                    <span>
                        <input class="form-control required" type="text" name="i_address1" id="i_address1" value="<?php if (isset($myProfile['address1'])) echo $myProfile['address1']; ?>" placeholder="Address 1" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Address 2</span>
                    <span>
                        <input class="form-control required" type="text" name="i_address2" id="i_address2" value="<?php if (isset($myProfile['address2'])) echo $myProfile['address2']; ?>" placeholder="Address 2" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>City</span>
                    <span>
                        <input class="form-control required" type="text" name="i_city" id="i_city" value="<?php if (isset($myProfile['city'])) echo $myProfile['city']; ?>" placeholder="City" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Postcode / Zip</span>
                    <span>
                        <input class="form-control required" type="text" name="i_postcode" id="i_postcode" value="<?php if (isset($myProfile['postcode'])) echo $myProfile['postcode']; ?>" placeholder="Postcode / Zip" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Country</span>
                    <span>
                        <select name="i_country" id="i_country" class="select_item" onchange="i_set_state_list(this.value);">
                            <option value="">Select One</option>
                            <?php
                            if ($countryList) {
                                foreach ($countryList as $k => $v) {
                                    ?>
                                    <option value="<?php echo $k ?>" <?php if (isset($myProfile['country']) && $myProfile['country'] == $k) echo "selected"; ?>><?php echo $v ?></option>                               
                                    <?php
                                }
                            }
                            ?>                               
                        </select>
                    </span>
                </label>
               
                <label class="lable_style" id="i_country_state_visibility">
                    <span>State</span>                        
                    <span id="i_state_block">                            
                        <select name="i_state" id="i_state" class="select_item">
                            <?php foreach ($state_list as $k => $v) { ?>
                            <option <?php if($myProfile['state'] == $k) echo 'selected'; ?>  value="<?php echo $k ?>"><?php echo $v ?></option>
                            <?php } ?>
                        </select>
                    </span>
                </label>
               
                    <label class="lable_style">
                        <span>Business Phone</span>
                        <span>
                            <input class="form-control required" type="text" name="i_phone" id="i_phone" value="<?php if (isset($myProfile['phone'])) echo $myProfile['phone']; ?>" placeholder="Business Phone" />
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Website</span>
                        <span>
                            <input class="form-control required" type="text" name="i_website" id="i_website" value="<?php if (isset($myProfile['website'])) echo $myProfile['website']; ?>" placeholder="Website" />
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>E-mail</span>
                         <span>
                        <input class="form-control email required" type="text" name="i_email" id="i_email" value="<?php if (isset($myProfile['email'])) echo $myProfile['email']; ?>" placeholder="E-mail" disabled="disabled" />
                    </span>
                    </label>


                    <label class="lable_style">
                        <span>Password</span>
                        <span>
                            <input class="form-control equalTo" type="password" name="i_password" id="i_password" value="" placeholder="Password" />
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Confirm Password</span>
                        <span>
                            <input class="form-control equalTo" type="password" name="i_cpassword" id="i_cpassword" value="" placeholder="Confirm Password" />
                        </span>
                    </label>

                    <label class="lable_style">
                        <span>Contact Person</span>
                        <span>
                            <input class="form-control required " type="text" name="i_contact_person" id="i_contact_person" value="<?php if (isset($myProfile['contact_person'])) echo $myProfile['contact_person']; ?>" placeholder="Contact Person" />
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Contact Person's position</span>
                        <span>
                            <input class="form-control required " type="text" name="i_position_contact_person" id="i_position_contact_person" value="<?php if (isset($myProfile['position_contact_person'])) echo $myProfile['position_contact_person']; ?>" placeholder="Your position" />
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Contact Person's Phone</span>
                        <span>
                            <input class="form-control required " type="text" name="i_contact_person_phone" id="i_contact_person_phone" value="<?php if (isset($myProfile['contact_person_phone'])) echo $myProfile['contact_person_phone']; ?>" placeholder="+61 3 xxxx xxxx" />
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Contact Person's E-mail</span>
                        <span>
                            <input class="form-control email required" type="text" name="i_contact_person_email" id="i_contact_person_email" value="<?php if (isset($myProfile['contact_person_email'])) echo $myProfile['contact_person_email']; ?>" placeholder="Email" />
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Does your company have current membership with:</span>
                        <span>
                            <div style="width:100px;float:left;">Alibaba</div> <div style="width:60px;float:left;"><input type="checkbox" name="i_alibaba_membership" id="i_alibaba_membership" value="1" <?php if (isset($myProfile['alibaba_membership']) && $myProfile['alibaba_membership'] == 1)echo "checked"; ?> class="span_check2" style="margin-top:0px;" /></div>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>&nbsp;</span>
                        <span>
                            <div style="width:100px;float:left;">Made in China</div>
                            <div style="width:60px;float:left;">
                                <input type="checkbox" name="i_made_in_china" id="i_made_in_china" value="1"  <?php if (isset($myProfile['made_in_china']) && $myProfile['made_in_china'] == 1) echo "checked"; ?> class="span_check2" style="margin-top:0px;" />
                            </div>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>&nbsp;</span>
                        <span>                                                
                            <div style="width:100px;float:left;">Other</div> <div style="width:120px;float:left;"><input class="form-control" type="text" name="i_other_membership" id="i_other_membership" value="<?php if (isset($myProfile['other_membership'])) echo $myProfile['other_membership']; ?>"  /></div>
                        </span>
                    </label>
                    <label class="lable_style margin-5">
                        <span>&nbsp;</span>
                        <span><button type="submit" onclick="submitForm4();" class="buttom">Update</button></span>
                    </label>
                </div><!--###~~If User Type Int. Dealer ~~###---->
            </form>


        </div>    

    </div>

    <script>
        $(function()
        {
            var user_type = '<?php echo $myProfile['user_type']; ?>';
        $('.frm').hide();
        $('#frm'+user_type).show();              
    });
    
    $(function(){
       var country_state = '<?php if ($myProfile['country'] == 'AU' ||  $myProfile['country'] == 'US' ||  $myProfile['country'] == 'CA') echo 1; ?>';
       //alert(country_state);
       if(country_state == 1)
         $('#i_country_state_visibility').show();              
    });
     $(function(){
       var country_state = '<?php if ($myProfile['country'] == 'AU' ||  $myProfile['country'] == 'US' ||  $myProfile['country'] == 'CA') echo 1; ?>';
       //alert(country_state);
       if(country_state == 1)
         $('#p_country_state_visibility').show();              
    });
    function submitForm2()
    {
        var user_type = $('#user_type').val();
        $('#type_'+user_type).val(user_type);
        $("#frm2").validate({
            rules: 
                {
              
                p_password:
                    {
                    minlength: 6,
                    maxlength: 32
                },
                p_cpassword:
                    {
                    equalTo:"#p_password"
                },
                p_re_email:
                    {
                    equalTo:"#p_email"
                }
            },

            messages:
                { 
               
                username:
                    {
                    usernameRule:"Username already exists."  
                },
                p_cpassword: "Please enter the same password.",

                p_re_email:"Please enter the same email id."
            }
        });
    }
    
    function submitForm3()
    {
        var user_type = $('#user_type').val();
        $('#type_'+user_type).val(user_type);
        $("#frm3").validate({
            rules: 
                {
                
                a_password:
                    {
                    minlength: 6,
                    maxlength: 32
                },
                a_cpassword:
                    {
                    equalTo:"#a_password"
                },
                a_re_email:
                    {
                    equalTo:"#a_email"
                }
            },

            messages:
                { 
                
                username:
                    {
                    usernameRule:"Username already exists."  
                },
                a_cpassword: "Please enter the same password.",
                a_re_email:"Please enter the same email id."
            }
        });     
    }
    
    function submitForm4()
    {
        var user_type = $('#user_type').val();
        $('#type_'+user_type).val(user_type);
        $("#frm4").validate({
            rules: 
                {
              
                i_password:
                    {
                    minlength: 6,
                    maxlength: 32
                },
                i_cpassword:
                    {
                    equalTo:"#i_password"
                },
                i_re_email:
                    {
                    equalTo:"#i_email"
                }
            },
            messages:
                { 
              
                username:
                    {
                    usernameRule:"Username already exists."  
                },
                i_cpassword: "Please enter the same password.",

                i_re_email:"Please enter the same email id."
            }
        });
    }                                    
</script>
