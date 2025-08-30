<style>
    table, caption, tbody, tfoot, thead, tr, th, td
    { 
        vertical-align: top !important;
    }
</style>
<div class="clear"></div>
<div class="v_gap"></div>
<div class="v_gap"></div>
<div class="clear"></div>
<table cellpadding="8" border="0" style="width:100%;" class="cmn_tbl">
    <tr>
        <td style="width:20%;">
            <img width="110" border="0" height="120" alt="" src="<?php echo BASEURL?>images/my_ads.gif">
        </td>
        <td style="width:30%;" valign="top">
            
            <span class="welcomeTTL">Welcome : <?php echo get_username();?></span>
            <br/>
            <br/>
            <br/>
            
            <span class="big_font">ACCOUNT</span>
            <br/><br/>
            <?php
            if(is_package_shift_dealer(member_id()))
            {
            ?>
            <a href="<?php echo BASEURL?>package_list">My Package</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <?php
            }
            ?>
            <a href="<?php echo BASEURL;?>account">Post a New Part</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <a href="<?php echo BASEURL;?>my_listings">My Parts Listing</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <!-- <a href="<?php echo BASEURL;?>add-credit">Add Credit</a> -->
        </td>
        <td style="width:20%;">
            <img width="110" border="0" height="120" alt="" src="<?php echo BASEURL?>images/settings.gif">
        </td>
        <td style="width:30%;" valign="top">
            <span>&nbsp;</span>
            <br/>
            <br/>
            <br/>
            <span class="big_font">Settings</span>
            <br/><br/>
            <?php
            if(is_package_shift_dealer(member_id()))
            {
            ?>
            <a target="_blank" href="<?php echo BASEURL?>~<?php echo get_username();?>">My Site</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <?php
            }
            ?>
            <a href="<?php echo BASEURL?>view_profile">View Profile</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <a href="<?php echo BASEURL?>my_profile">Edit Profile</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <a href="<?php echo BASEURL?>change_password">Change Password</a>
            <?php
            if(is_package_shift_dealer(member_id()))
            {
            ?>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <a href="<?php echo BASEURL?>contact_information">Public Contact Information</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <a href="<?php echo BASEURL?>update_about_me">About Me</a>
            <div class="clear"></div>
            <div class="vs_gap"></div>
            <div class="clear"></div>
            <a href="<?php echo BASEURL?>profile_page_layout">Profile Page Layout</a>
            <?php
            }
            ?>
        </td>
    </tr>

</table>

<div class="clear"></div>
<div class="v_gap"></div>
<div class="v_gap"></div>
<div class="v_gap"></div>
<div class="clear"></div>