<link href="<?php echo BASEURL?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<div class="vist_profile">
    <div class="side_ber">
        <?php include 'left-menu.php'; ?>
    </div>
    <div class="main_tab">
    	<div class="span_row">
            <form id="contactFrm" name="contactFrm" method="post" action="">
                <div class="bRow">
                    <div class="blftPart">
                        Title 
                    </div>
                    <div class="brightPart ">
                        <input type="text" id="title" name="title" class="required" />
                    </div>
                    <div class="clear"></div>
                </div>


               <div class="bRow">
                    <div class="blftPart">
                        Your name
                    </div>
                    <div class="brightPart">
                        <input type="text" id="yourname" name="yourname" class="required" />
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        E-mail
                    </div>
                    <div class="brightPart">
                        <input type="text" id="email" name="email" class="required email" />
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        Address
                    </div>
                    <div class="brightPart">
                        <input type="text" id="address" name="address" class="required" />
                    </div>
                    <div class="clear"></div>
                </div> 


               <div class="bRow">
                    <div class="blftPart">
                        Country
                    </div>
                    <div class="brightPart">
                        <?php 
                            $countryList = getCountryList();
                        ?>
                        <select name="country" id="country" class="select_item required" onchange="c_set_state_list(this.value);">
                            <option value="">Select One</option>
                            <?php
                            if($countryList)
                            {
                                foreach($countryList as $k =>$v)
                                {
                            ?>
                                     <option value="<?php echo $k?>"><?php echo $v?></option>                               
                            <?php
                                }
                            }
                            ?>                               
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>  




                <div class="bRow" id="country_state_visibility">
                    <div class="blftPart">
                        State
                    </div>
                    <div class="brightPart" id="state_box">
                        &nbsp;
                    </div>
                    <div class="clear"></div>
                </div> 
                
                
                <div class="bRow">
                    <div class="blftPart">
                        Post Code
                    </div>
                    <div class="brightPart">
                        <input type="text" id="postcode" name="postcode" class="required" />
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    (+ require at least one of the following phone numbers)
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        Home Phone
                    </div>
                    <div class="brightPart">
                        <input type="text" id="homephone" name="homephone" class="required" />
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        Business Phone
                    </div>
                    <div class="brightPart">
                        <input type="text" id="businessphone" name="businessphone" class="required" />
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        Mobile
                    </div>
                    <div class="brightPart">
                        <input type="text" id="mobile" name="mobile" class="required" />
                    </div>
                    <div class="clear"></div>
                </div> 


                <div class="bRow">
                    <div class="blftPart">
                        Fax
                    </div>
                    <div class="brightPart">
                        <input type="text" id="fax" name="fax"  class="required"/>
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        Preferred contact method
                    </div>
                    <div class="brightPart">
                        <select id="contact_method" name="contact_method" class="required">
                            <option value="email">Email</option>
                            <option value="home_phone">Home phone</option>
                            <option value="work_phone">Business phone</option>
                            <option value="mobile">Mobile</option>
                            <option value="fax">Fax</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        Your message
                    </div>
                    <div class="brightPart">
                        <textarea   id="message"  name="message" class="required"></textarea>
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
                <div class="bRow">
                    <b>More information</b>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    <div class="blftPart">
                        Are you trading in?
                    </div>
                    <div class="brightPart">
                        <table  cellpadding="0" cellspacing="0" border="0" style="width:25%;">
                            <tr>
                                <td>
                                    <input type="radio" id="trading_y" name="trading" value="1" class="required" /> Yes
                                </td>
                                <td>
                                    <input type="radio" id="trading_n" name="trading" value="0" class="required"/> No
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    If yes, please enter trade in details
                    <div class="clear"></div>
                    <div class="vs_gap"></div>
                    <div class="clear"></div>
                    <textarea   id="trading_msg"  name="trading_msg"></textarea>
                    <div class="clear"></div>
                </div> 

                <div class="bRow">
                    Have you researched finance on the internet?
                    <div class="clear"></div>
                    <div class="vs_gap"></div>
                    <div class="clear"></div>
                        <table  cellpadding="0" cellspacing="0" border="0" style="width:25%;">
                            <tr>
                                <td>
                                    <input type="radio" id="researched_finance_y" name="researched_finance" value="1" class="required"/> Yes
                                </td>
                                <td>
                                    <input type="radio" id="researched_finance_n" name="researched_finance" value="0" /> No
                                </td>
                            </tr>
                        </table>
                    <div class="clear"></div>
                </div> 


                <div class="bRow">
                    Are you interested in receiving a quote for finance from the seller?
                    <div class="clear"></div>
                    <div class="vs_gap"></div>
                    <div class="clear"></div>
                        <table  cellpadding="0" cellspacing="0" border="0" style="width:25%;">
                            <tr>
                                <td>
                                    <input type="radio" id="receiving_quote_y" name="receiving_quote" value="1" class="required" /> Yes
                                </td>
                                <td>
                                    <input type="radio" id="receiving_quote_n" name="receiving_quote" value="0"  /> No
                                </td>
                            </tr>
                        </table>
                    <div class="clear"></div>
                </div> 

                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>

                <div class="bRow">
                    <div class="blftPart">
                        <button onclick="save_form(); return false;" class="action blue"><span class="label">Send</span></button>
                    </div>
                    <div class="brightPart">
                        &nbsp;
                    </div>
                    <div class="clear"></div>
                </div> 


                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
                
          </form>      
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#contactFrm'). validate({
            
        });
    });  
</script>