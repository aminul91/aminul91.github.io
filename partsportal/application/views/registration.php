
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
    #i_country_state_visibility{ display:none; }
</style>
<?php
$countryList = getCountryList();
$austateList = getStateList('AU');
?>
<div class="ragistation">
    <h1 class="title_h1">Registration</h1>
    <div class="idenity_type">
        <label class="idenity_label">
            <p>Idenity Type</p>
            <select name="user_type2" id="user_type" class="select_item_idenity" onchange="change_form(this.value);">
                <option value="2">Private seller</option>
                <option value="3">Australian Dealer</option>
                <option value="4">International Dealer</option>
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
                        <input class="form-control required" type="text" name="p_title" id="p_title" value="<?php echo $_POST['p_title'];?>" placeholder="Title" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>First name</span>
                    <span>
                        <input class="form-control required" type="text" name="p_fname" id="p_fname" value="<?php echo $_POST['p_fname'];?>" placeholder="First name" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Surname</span>
                    <span>
                        <input class="form-control required" type="text" name="p_surname" id="p_surname" value="<?php echo $_POST['p_surname'];?>" placeholder="Surname" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Date of Birth</span>
                    <span>
                        <input class="form-control required" type="text" name="p_dob" id="p_dob" value="<?php echo $_POST['p_country'];?>" placeholder="Date Of Birth" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Street Address</span>
                    <span>
                        <input class="form-control required" type="text" name="p_street_address" id="p_street_address" value="<?php echo $_POST['p_street_address'];?>" placeholder="Street Address" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Town/City</span>
                    <span>
                        <input class="form-control required" type="text" name="p_city" id="p_city" value="<?php echo $_POST['p_city'];?>" placeholder="Town/City" />
                    </span>
                </label>
                
                
                <label class="lable_style">
                    <span>State</span>
                    <span>
                        <select name="p_state" id="p_state" class="select_item required">
                            <option value="">Select One</option>
                            <?php
                            if($austateList) 
                            {
                                foreach ($austateList as $k => $v) 
                                {
                                ?>
                                    <option  <?php if (isset($_POST['p_state']) && $_POST['p_state'] == $k) echo "selected"; ?> value="<?php echo $k ?>"><?php echo $v ?></option>
                                <?php
                                }
                            }
                            ?>                       
                        </select>
                    </span>
                </label>
                 <label class="lable_style">
                    <span>Postcode</span>
                    <span>
                        <input class="form-control required" type="text" name="p_postcode" id="p_postcode" value="<?php echo $_POST['p_postcode'];?>" placeholder="Postcode" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Phone (Landline)</span>
                    <span>
                        <input class="form-control required" type="text" name="p_phone" id="p_phone" value="<?php echo $_POST['p_phone'];?>" placeholder="+61 3 xxxx xxxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Mobile Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="p_mobile" id="p_mobile" value="<?php echo $_POST['p_mobile'];?>" placeholder="+61 4xx xxx xxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail</span>
                    <span>
                        <input class="form-control required email  emailRule" type="text" name="p_email" id="p_email" value="<?php echo $_POST['p_email'];?>" placeholder="E-mail" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail confirm</span>
                    <span>
                        <input class="form-control required  equalTo " type="text" name="p_re_email" id="p_re_email" value="<?php echo $_POST['p_email'];?>" placeholder="E-mail confirm" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Password</span>
                    <span>
                        <input class="form-control required equalTo" type="password" name="p_password" id="p_password" value="<?php echo $_POST['p_password'];?>" placeholder="Password" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Confirm Password</span>
                    <span>
                        <input class="form-control required equalTo" type="password" name="p_cpassword" id="p_cpassword" value="<?php echo $_POST['p_password'];?>" placeholder="Confirm Password" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Captcha</span>
                    <span>
                        <img src="<?php echo BASEURL; ?>captcha/captcha.php" id="captcha" /><br/>
                        <a href="javascript:void(0);" onclick="
                            document.getElementById('captcha').src='<?php echo BASEURL; ?>captcha/captcha.php?'+Math.random();
                            document.getElementById('captcha-form').focus();"
                           id="change-image">Not readable? Change text.
                        </a><br/>
                        <input type="text" name="captcha" id="captcha-form" class="form-control  required" autocomplete="off" />
                    </span>
                </label>

                <label class="lable_style">
                    <span><p class="agreement_text required">Agree with all equipment parts Trems &amp; Condition</p></span>
                    <span><input type="checkbox" name="terms_cond" id="terms_cond" value="1" class="span_check2 required" /></span>
                </label>
                <label class="lable_style margin-5">
                    <span>&nbsp;</span>
                    <span><button type="submit" onclick="submitForm2();" class="buttom">Register</button></span>
                </label>
            </div><!--###~~If User Type private seller~~###---->
        </form>



        <form name="australian" id="frm3" class="frm"  action="" method="POST" style="float:left;">
            <input type="hidden" name="user_type" id="type_3" />
            <div >
                <!--label class="lable_style">
                    <span>Profile name</span>
                    <span>
                        <input class="form-control required" type="text" name="a_username" id="a_username" value="<?php echo $_POST['a_username'];?>" placeholder="Profile name" />
                    </span>
                </label-->
                <label class="lable_style">
                    <span>Registered Buiness name</span>
                    <span>
                        <input class="form-control required" type="text" name="a_username" id="a_username" value="<?php echo $_POST['a_username'];?>" placeholder="Registered Buiness name" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Buiness A B N</span>
                    <span>
                        <input class="form-control required" type="text" name="a_business_abn" id="a_business_abn" value="<?php echo $_POST['a_business_abn'];?>" placeholder="Buiness A B N" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Dealer Licence #</span>
                    <span>
                        <input class="form-control" type="text" name="a_dealer_licence" id="a_dealer_licence" value="<?php echo $_POST['a_dealer_licence'];?>" placeholder="Dealer Licence #" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Street Address</span>
                    <span>
                        <input class="form-control required" type="text" name="a_street_address" id="a_street_address" value="<?php echo $_POST['a_street_address'];?>" placeholder="Street Address" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Town/City</span>
                    <span>
                        <input class="form-control required" type="text" name="a_city" id="a_city" value="<?php echo $_POST['a_city'];?>" placeholder="Town/City" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Postcode</span>
                    <span>
                        <input class="form-control required" type="text" name="a_postcode" id="a_postcode" value="<?php echo $_POST['a_postcode'];?>" placeholder="Postcode" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>State</span>
                    <span>
                        <select name="a_state" id="a_state" class="select_item required">
                            <?php
                            if ($austateList) {
                                foreach ($austateList as $k => $v) {
                                    ?>
                                    <option  <?php if (isset($_POST['a_state']) && $_POST['a_state'] == $k) echo "selected"; ?> value="<?php echo $k ?>"><?php echo $v ?></option>
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
                        <input class="form-control required" type="text" name="a_phone" id="a_phone" value="<?php echo $_POST['a_phone'];?>" placeholder="Business Phone" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Website</span>
                    <span>
                        <input class="form-control required" type="text" name="a_website" id="a_website" value="<?php echo $_POST['a_website'];?>" placeholder="Website" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Mobile Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="a_mobile" id="a_mobile" value="<?php echo $_POST['a_mobile'];?>" placeholder="+61 4xx xxx xxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail</span>
                    <span>
                        <input class="form-control required email equalTo emailRule" type="text" name="a_email" id="a_email" value="<?php echo $_POST['a_email'];?>" placeholder="E-mail" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail confirm</span>
                    <span>
                        <input class="form-control required  equalTo " type="text" name="a_re_email" id="a_re_email" value="<?php echo $_POST['a_email'];?>" placeholder="E-mail confirm" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Password</span>
                    <span>
                        <input class="form-control required equalTo" type="password" name="a_password" id="a_password" value="<?php echo $_POST['a_password'];?>" placeholder="Password" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Confirm Password</span>
                    <span>
                        <input class="form-control required equalTo" type="password" name="a_cpassword" id="a_cpassword" value="<?php echo $_POST['a_password'];?>" placeholder="Confirm Password" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Contact Person</span>
                    <span>
                        <input class="form-control required" type="text" name="a_contact_person" id="a_contact_person" value="<?php echo $_POST['a_contact_person'];?>" placeholder="Contact Person" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's position</span>
                    <span>
                        <input class="form-control required" type="text" name="a_position_contact_person" id="a_position_contact_person" value="<?php echo $_POST['a_position_contact_person'];?>" placeholder="Your position" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="a_contact_person_phone" id="a_contact_person_phone" value="<?php echo $_POST['a_contact_person_phone'];?>" placeholder="+61 3 xxxx xxxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's E-mail</span>
                    <span>
                        <input class="form-control required email" type="text" name="a_contact_person_email" id="a_contact_person_email" value="<?php echo $_POST['a_contact_person_email'];?>" placeholder="Email" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Captcha</span>
                    <span>
                        <img src="<?php echo BASEURL; ?>captcha/captcha.php" id="captcha" /><br/>
                        <a href="javascript:void(0);" onclick="
                            document.getElementById('captcha').src='<?php echo BASEURL; ?>captcha/captcha.php?'+Math.random();
                            document.getElementById('captcha-form').focus();"
                           id="change-image">Not readable? Change text.
                        </a><br/>
                        <input type="text" name="captcha" id="captcha-form" class="form-control  required" autocomplete="off" />
                    </span>
                </label>

                <label class="lable_style">
                    <span><p class="agreement_text required">Agree with all equipment parts Trems &amp; Condition</p></span>
                    <span><input type="checkbox" name="terms_cond" id="terms_cond" value="1" class="span_check2 required" /></span>
                </label>
                <label class="lable_style margin-5">
                    <span>&nbsp;</span>
                    <span><button type="submit" onclick="submitForm3();" class="buttom">Register</button></span>
                </label>
            </div><!--###~~If User Type Australian Business Account.~~###---->
        </form>






        <form name="international" id="frm4" class="frm" action="" method="POST" style="float:left;">
            <input type="hidden" name="user_type" id="type_4" />
            <div >
                <label class="lable_style">
                    <span>Registered Business or Company Name</span>
                    <span>
                        <input class="form-control required" type="text" name="i_business_company_name" id="i_business_company_name" value="<?php echo $_POST['i_business_company_name'];?>" placeholder="Registered Business or Company Name" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Business or Company ID Number</span>
                    <span>
                        <input class="form-control required" type="text" name="i_business_company_id_number" id="i_business_company_id_number" value="<?php echo $_POST['i_business_company_id_number'];?>" placeholder="Business or Company ID Number" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Address 1</span>
                    <span>
                        <input class="form-control required" type="text" name="i_address1" id="i_address1" value="<?php echo $_POST['i_address1'];?>" placeholder="Address 1" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Address 2</span>
                    <span>
                        <input class="form-control required" type="text" name="i_address2" id="i_address2" value="<?php echo $_POST['i_address2'];?>" placeholder="Address 2" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>City</span>
                    <span>
                        <input class="form-control required" type="text" name="i_city" id="i_city" value="<?php echo $_POST['i_city'];?>" placeholder="City" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Postcode / Zip</span>
                    <span>
                        <input class="form-control required" type="text" name="i_postcode" id="i_postcode" value="<?php echo $_POST['i_postcode'];?>" placeholder="Postcode / Zip" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Country</span>
                    <span>
                        <select name="i_country" id="i_country" class="select_item required" onchange="i_set_state_list(this.value);">
                            <option value="">Select One</option>
                            <?php
                            if ($countryList) {
                                foreach ($countryList as $k => $v) {
                                    ?>
                                    <option   <?php if (isset($_POST['i_country']) && $_POST['i_country'] == $k) echo "selected"; ?> value="<?php echo $k ?>"><?php echo $v ?></option>                               
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
                        <select name="i_state" id="i_state" class="select_item required">
                            <?php foreach ($state_list as $k => $v) { ?>
                            <option  <?php if (isset($_POST['i_state']) && $_POST['i_state'] == $k) echo "selected"; ?>  value="<?php echo $k ?>"><?php echo $v ?></option>
                            <?php } ?>
                        </select>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Business Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="i_phone" id="i_phone" value="<?php echo $_POST['i_phone'];?>" placeholder="Business Phone" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Website</span>
                    <span>
                        <input class="form-control required" type="text" name="i_website" id="i_website" value="<?php echo $_POST['i_website'];?>" placeholder="Website" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail</span>
                    <span>
                        <input class="form-control required email equalTo emailRule" type="text" name="i_email" id="i_email" value="<?php echo $_POST['i_email'];?>" placeholder="E-mail" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail confirm</span>
                    <span>
                        <input class="form-control required  equalTo" type="text" name="i_re_email" id="i_re_email" value="<?php echo $_POST['i_email'];?>" placeholder="E-mail confirm" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Password</span>
                    <span>
                        <input class="form-control required equalTo" type="password" name="i_password" id="i_password" value="<?php echo $_POST['i_password'];?>" placeholder="Password" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Confirm Password</span>
                    <span>
                        <input class="form-control required equalTo" type="password" name="i_cpassword" id="i_cpassword" value="<?php echo $_POST['i_password'];?>" placeholder="Confirm Password" />
                    </span>
                </label>

                <label class="lable_style">
                    <span>Contact Person</span>
                    <span>
                        <input class="form-control required" type="text" name="i_contact_person" id="i_contact_person" value="<?php echo $_POST['i_contact_person'];?>" placeholder="Contact Person" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's position</span>
                    <span>
                        <input class="form-control required" type="text" name="i_position_contact_person" id="i_position_contact_person" value="<?php echo $_POST['i_position_contact_person'];?>" placeholder="Your position" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's Phone</span>
                    <span>
                        <input class="form-control required" type="text" name="i_contact_person_phone" id="i_contact_person_phone" value="<?php echo $_POST['i_contact_person_phone'];?>" placeholder="+61 3 xxxx xxxx" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's E-mail</span>
                    <span>
                        <input class="form-control required email " type="text" name="i_contact_person_email" id="i_contact_person_email" value="<?php echo $_POST['i_contact_person_email'];?>" placeholder="Email" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>Does your company have current membership with:</span>
                    <span>
                        <div style="width:100px;float:left;">Alibaba</div> <div style="width:60px;float:left;"><input type="checkbox" name="i_alibaba_membership" id="i_alibaba_membership" value="1"  <?php if (isset($_POST['i_alibaba_membership']) && $_POST['i_alibaba_membership'] == 1) echo "checked"; ?> class="span_check2" style="margin-top:0px;" /></div>
                    </span>
                </label>
                <label class="lable_style">
                    <span>&nbsp;</span>
                    <span>
                        <div style="width:100px;float:left;">Made in China</div> <div style="width:60px;float:left;"><input type="checkbox" name="i_made_in_china" id="i_made_in_china" value="1"   <?php if (isset($_POST['i_made_in_china']) && $_POST['i_made_in_china'] == 1) echo "checked"; ?> class="span_check2" style="margin-top:0px;" /></div>
                    </span>
                </label>
                <label class="lable_style">
                    <span>&nbsp;</span>
                    <span>                                                
                        <div style="width:100px;float:left;">Other</div> <div style="width:120px;float:left;"><input class="form-control" type="text" name="i_other_membership" id="i_other_membership" value="$_POST['i_other_membership']"  /></div>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Captcha</span>
                    <span>
                        <img src="<?php echo BASEURL; ?>captcha/captcha.php" id="captcha" /><br/>
                        <a href="javascript:void(0);" onclick="
                            document.getElementById('captcha').src='<?php echo BASEURL; ?>captcha/captcha.php?'+Math.random();
                            document.getElementById('captcha-form').focus();"
                           id="change-image">Not readable? Change text.
                        </a><br/>
                        <input type="text" name="captcha" id="captcha-form" class="form-control  required" autocomplete="off" />
                    </span>
                </label>

                <label class="lable_style">
                    <span><p class="agreement_text required">Agree with all equipment parts Trems &amp; Condition</p></span>
                    <span><input type="checkbox" name="terms_cond" id="terms_cond" value="1" class="span_check2 required" /></span>
                </label>
                <label class="lable_style margin-5">
                    <span>&nbsp;</span>
                    <span><button type="submit" onclick="submitForm4();" class="buttom">Register</button></span>
                </label>
            </div><!--###~~If User Type Int. Dealer ~~###---->
        </form>


    </div>    

</div>

<script>
    function change_form(user_type)
    {
        $('.frm').hide();
        $('label.error').remove();
        $('#frm'+user_type).find("input[type=text], input[type=password], input[type=email], select, textarea").val("");;
        $('#frm'+user_type).show();
        if(user_type == 2)
        {
            $('#seller_title_box').html('Private Seller'); 
            $('#country_state_visibility').remove();                        
        }
        else if(user_type == 3)
        {
            $('#seller_title_box').html('Australian Dealer');  
        }
        else if(user_type == 4)
        {
            $('#seller_title_box').html('Int. Dealer Dealer');  
        } 
    }
    function submitForm2()
    {
        var user_type = $('#user_type').val();
        $('#type_'+user_type).val(user_type);
        $("#frm2").validate({
            rules: 
            {
                p_email:
                {
                    emailRule: true
                },
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
                p_email: 
                {
                    emailRule: 'Email address already exists.'
                },
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
                a_email:
                {
                    emailRule: true
                },
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
                a_email: 
                {
                    emailRule: 'Email address already exists.'
                },
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
                i_email:
                {
                    emailRule: true
                },
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
                i_email: 
                {
                    emailRule: 'Email address already exists.'
                },
                username:
                {
                    usernameRule:"Username already exists."  
                },
                i_cpassword: "Please enter the same password.",

                i_re_email:"Please enter the same email id."
            }
        });
    }  
    
    <?php
    if(isset($_POST['user_type']))
    {
    ?>
        $('#user_type').val(<?php echo $_POST['user_type']?>);
        change_form(<?php echo $_POST['user_type']?>);        
    <?php
    }
    ?>
</script>
