<link href="<?php echo BASEURL?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<div class="vist_profile">
    <div class="main_tab_2">
        <div class="span_row">
            <form id="addrFrm" name="addrFrm" method="post" action="">
                <span class="titleBox">Contact Information[<a href="<?php echo BASEURL?>profile">Back</a>]</span>
                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
                
                <div class="bRow">
                    <div class="blftPart">
                        Address 1
                    </div>
                    <div class="brightPart">
                        <textarea id="address1" name="address1" ><?php echo $cInfo['address1']?></textarea>
                    </div>
                    <div class="clear"></div>
                </div> 
                
                <div class="bRow">
                    <div class="blftPart">
                        Address 2
                    </div>
                    <div class="brightPart">
                        <textarea id="address2" name="address2" ><?php echo $cInfo['address2']?></textarea>
                    </div>
                    <div class="clear"></div>
                </div> 
                
                <div class="bRow">
                    <div class="blftPart">
                        Phone
                    </div>
                    <div class="brightPart">
                        <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $cInfo['contact_person_phone']?>"  placeholder="Phone" />
                    </div>
                    <div class="clear"></div>
                </div> 
                
                
                <div class="bRow">
                    <div class="blftPart">
                        Email
                    </div>
                    <div class="brightPart">
                        <input class="form-control" type="text" name="email" id="email" value="<?php echo $cInfo['contact_person_email']?>" placeholder="E-mail" />
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
                
                <div class="bRow">
                    <div class="blftPart">                        
                        <button onclick="save_my_contact_info(document.forms.addrFrm); return false;" class="action blue"><span class="label">Save</span></button>
                    </div>
                    <div class="brightPart">
                        &nbsp;
                    </div>
                    <div class="clear"></div>
                </div> 
                
                <div class="clear"></div>
             </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>