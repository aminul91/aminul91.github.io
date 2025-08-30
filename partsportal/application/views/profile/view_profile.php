
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
    <h1 class="title_h1">view my profile <span class="titleBox">[<a href="<?php echo BASEURL?>profile">Back</a>]</span></h1>
     
    <div class="form_style">
        <form name="regFrm" id="frm2" class="frm" action="" method="POST" style="float:left;">  
            <input type="hidden" name="user_type" id="type_2" />
            <input type="hidden" name="p_country" id="p_country" value="AU"  />
            <h5 class="title_h5" id="seller_title_box">Private Seller<br/><br/></h5>
            <div >
                <label class="lable_style">
                    <span>Title</span>
                    <span>
                        <?php echo $myProfile['title'];?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>First name</span>
                    <span>
                       <?php echo $myProfile['fname']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Surname</span>
                    <span>
                       <?php echo $myProfile['surname']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Date of Birth</span>
                    <span>
                       <?php echo date('d/m/Y',  strtotime($myProfile['dob'])); ?><br/><br/>
                    </span>
                </label>

              
               
               
                <label class="lable_style">
                    <span>Street Address</span>
                    <span>
                            <?php echo $myProfile['street_address']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Town/City</span>
                    <span>
                       <?php echo $myProfile['city']; ?><br/><br/>
                    </span>
                </label>
                  <label class="lable_style">
                    <span>State</span>
                    <span>
                         <?php if(isset($myProfile['state']))echo $myProfile['state']; ?><br/><br/>
                    </span>
                </label>
                 <label class="lable_style">
                    <span>Postcode</span>
                    <span>
                       <?php echo $myProfile['postcode']; ?><br/><br/>
                    </span>
                </label>

                <label class="lable_style">
                    <span>Phone (Landline)</span>
                    <span>
                        <?php echo $myProfile['phone']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Mobile Phone</span>
                    <span>
                            <?php echo $myProfile['mobile']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail</span>
                    <span>
                            <?php echo $myProfile['email']; ?><br/><br/>
                    </span>
                </label>

            </div><!--###~~If User Type private seller~~###---->
        </form>



        <form name="australian" id="frm3" class="frm"  action="" method="POST" style="float:left;">
            <input type="hidden" name="user_type" id="type_3" />
            <h5 class="title_h5" id="a_seller_title_box">Australian Seller<br/><br/></h5>
            <div >
                <label class="lable_style">
                    <span>Profile name</span>
                    <span>
                       <?php echo $myProfile['username']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Registered Buiness name</span>
                    <span>
                            <?php echo $myProfile['reg_business_name']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Buiness A B N</span>
                    <span>
                        <?php echo $myProfile['business_abn']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Dealer Licence #</span>
                    <span>
                            <?php echo $myProfile['dealer_licence']; ?><br/><br/>
                    </span>
                </label>

                <label class="lable_style">
                    <span>Street Address</span>
                    <span>
                            <?php echo $myProfile['street_address']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Town/City</span>
                    <span>
                            <?php echo $myProfile['city']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Postcode</span>
                    <span>
                            <?php echo $myProfile['postcode']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>State</span>
                    <span>
                        <?php echo $myProfile['state']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Business Phone</span>
                    <span>
                            <?php echo $myProfile['phone']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Website</span>
                    <span>
                            <?php echo $myProfile['website']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Mobile Phone</span>
                    <span>
                            <?php echo $myProfile['mobile']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>E-mail</span>
                    <span>
                            <?php echo $myProfile['email']; ?><br/><br/>
                    </span>
                </label>

                <label class="lable_style">
                    <span>Contact Person</span>
                    <span>
                            <?php echo $myProfile['contact_person']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's position</span>
                    <span>
                            <?php echo $myProfile['position_contact_person']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's Phone</span>
                    <span>
                                <?php echo $myProfile['contact_person_phone']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Contact Person's E-mail</span>
                    <span>
                               <?php  echo $myProfile['contact_person_email']; ?><br/><br/>
                    </span>
                </label>
               
            </div><!--###~~If User Type Australian Business Account.~~###---->
        </form>






        <form name="international" id="frm4" class="frm" action="" method="POST" style="float:left;">
            <input type="hidden" name="user_type" id="type_4" />
            <h5 class="title_h5" id="i_seller_title_box">International Seller<br/><br/></h5>
            <div >
                <label class="lable_style">
                    <span>Registered Business or Company Name</span>
                    <span>
                          <?php echo $myProfile['reg_business_name']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Business or Company ID Number</span>
                    <span>
                          <?php echo $myProfile['business_company_id_number']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Address 1</span>
                    <span>
                            <?php echo $myProfile['address1']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Address 2</span>
                    <span>
                            <?php echo $myProfile['address2']; ?><br/><br/>
                    </span>
                </label>

                <label class="lable_style">
                    <span>City</span>
                    <span>
                          <?php echo $myProfile['city']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Postcode / Zip</span>
                    <span>
                          <?php echo $myProfile['postcode']; ?><br/><br/>
                    </span>
                </label>
                <label class="lable_style">
                    <span>Country</span>
                    <span>
                          <?php echo $myProfile['country']; ?><br/><br/>
                    </span>
                </label>
               
                <label class="lable_style" id="i_country_state_visibility">
                    <span>State</span>                        
                    <span id="i_state_block">                            
                          <?php echo $myProfile['state']; ?><br/><br/>
                    </span>
                </label>
               
                    <label class="lable_style">
                        <span>Business Phone</span>
                        <span>
                              <?php echo $myProfile['phone']; ?><br/><br/>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Website</span>
                        <span>
                             <?php echo $myProfile['website']; ?><br/><br/>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>E-mail</span>
                         <span>
                              <?php echo $myProfile['email']; ?><br/><br/>
                    </span>
                    </label>
                      <label class="lable_style">
                        <span>Contact Person</span>
                        <span>
                               <?php echo $myProfile['contact_person']; ?><br/><br/>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Contact Person's position</span>
                        <span>
                               <?php echo $myProfile['position_contact_person']; ?><br/><br/>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Contact Person's Phone</span>
                        <span>
                                <?php echo $myProfile['contact_person_phone']; ?><br/><br/>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>Contact Person's E-mail</span>
                        <span>
                              <?php echo $myProfile['contact_person_email']; ?><br/><br/>
                        </span>
                    </label>
                    <label class="lable_style">
                        <span>current membership with:</span>
                        <span>
                             <?php if (isset($myProfile['alibaba_membership']) && $myProfile['alibaba_membership'] == 1)echo "alibaba";?> <br/><?php if (isset($myProfile['made_in_china']) && $myProfile['made_in_china'] == 1) echo "made in china";?><br/> <?php if (isset($myProfile['other_membership'])) echo $myProfile['other_membership'];?>
                        </span>
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
     
       if(country_state == 1)
         $('#i_country_state_visibility').show();              
    });
     $(function(){
       var country_state = '<?php if ($myProfile['country'] == 'AU' ||  $myProfile['country'] == 'US' ||  $myProfile['country'] == 'CA') echo 1; ?>';
       
       if(country_state == 1)
         $('#p_country_state_visibility').show();              
    });
                                   
</script>
