<style>
.main_tab_2 { width: 94%; }
.srcRow{ width:98%;margin:0 auto;margin-bottom: 20px; }
.srcRowLeft{ width:50%;float:left; }
.srcRowRight{ width:50%;float:right; }
.lBox{ width:30%;float:left;}
.rBox{ width:67%;float:right;}
.rBox input[type="text"] { width: 70%; }
.rBox select { width: 70%; }
.search_item li{ text-indent: 0px !important; }
.search_item li.addr{ font-size:10px !important; }
.item_font a{ color:#4889F2;text-decoration:none; }
</style>
<link href="<?php echo BASEURL?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<div class="clear"></div>
<div class="v_gap"></div>
<div class="main_tab_2">
  <form id="srcFrm" name="srcFrm" method="POST" action="<?php BASEURL?>search_dealer">
    <div class="srcRow">        
            <div class="srcRowLeft">
                <div class="lBox">
                    Profile Name
                </div>
                <div class="rBox">
                    <input class="form-control" type="text" value="<?php echo $username;?>" name="username" id="username"  placeholder="Profile Name" />
                </div>
            </div>
            <div class="srcRowRight">
                <div class="lBox">
                        Idenity Type
                </div>
                <div class="rBox">
                    <select  class="select_item_idenity" id="user_type" name="user_type">
                        <option value="">--select--</option>
                        <option value="3" <?php if($user_type == 3){ echo 'selected="selected"'; }?>>Australian Dealer</option>
                        <option value="4" <?php if($user_type == 4){ echo 'selected="selected"'; }?>>International Dealer</option>
                    </select>
                </div>
            </div>
            <div class="clear"></div>         
    </div>
    <div class="clear"></div>
    <div class="srcRow">
            <div class="srcRowLeft">
                <div class="lBox">
                    &nbsp;
                </div>
                <div class="rBox">
                    <button type="submit" class="action blue"><span class="label">Submit</span></button>
                </div>
            </div>
            <div class="srcRowRight">
                <div class="lBox">
                        &nbsp;
                </div>
                <div class="rBox">
                    &nbsp;
                </div>
            </div>
            <div class="clear"></div>
    </div>    
  </form> 
    
    
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="v_gap"></div>
<div class="clear"></div>


<div class="result_fild">
    <div class="header_result">
    	<h5>Dealer List</h5>
        <div class="pagienation">
          	
        </div>
    </div>
    <?php
    if($delList)
    {
        foreach($delList as $dl)
        {
    ?>
        <div class="main_result">
            <div class="search_img_div">
                <div class="search_img">
                  <img src="<?php echo BASEURL?>images/dealer_image.png">
                </div>
            </div>
            <div class="search_details">
                 <ul class="search_item">
                    <li>
                        Australian Dealer
                        <br/>
                        <?php echo 'Address : '.($address1 = ($dl['address1']) ? $dl['address1'] : $dl['street_address'].', '.$dl['city'].', '.$dl['state'].', '.$dl['phone']).($address2 = ($dl['address2']) ? ', '.$dl['address2'] : '')?>
                    </li>
                    <li>&nbsp;</li>
                    <li><?php echo 'Contact person: '.$dl['contact_person'].', Phone: '.$dl['contact_person_phone'].', Email: '.$dl['contact_person_email']?>;</li>
                    <li class="item_font"><a target="_blank" href="<?php echo BASEURL.'~'.$dl['username']?>"><?php echo $dl['reg_business_name']?></a></li>
                 </ul>
                 <ul class="search_item">
                    <li class="addr">&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
                &nbsp;
            </div>
        </div>
        <div class="clear"></div>
     <?php
        }
    }
     ?> 
        
    
    
    
    
</div>