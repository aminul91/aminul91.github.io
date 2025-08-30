<style>
    <?php
    if(is_member_loggedin())
    {
    ?>
        .menu li{ padding: 0 11px !important; }
    <?php
    }
    ?>
</style>

<div class="nav">
        <ul class="menu">
        <!--li><a href="<?php echo BASEURL;?>" class="actional">Home</a></li-->
            <li><a href="<?php echo BASEURL;?>">Home</a></li>
            <li><a href="<?php echo BASEURL;?>about_us">About Us</a></li>
            <li><a href="<?php echo BASEURL;?>advertise_with_us">Advertise with us</a></li>
            <li><a href="<?php echo BASEURL;?>suggestion">Suggestion Box</a></li>
            <li><a href="<?php echo BASEURL;?>report_a_scam">Report a Scam</a></li>
            <li><a href="<?php echo BASEURL;?>find-dealer">Find a Dealer</a></li>
            <li><a href="<?php echo BASEURL;?>contact_us">Contact Us</a></li>
            <li><a href="<?php echo BASEURL;?>account">Place Your Ad</a></li>
        <?php 
          if(is_member_loggedin())
          {
        ?>
             <li><a href="<?php echo BASEURL;?>logout">Logout</a></li>
             <li><a href="<?php echo BASEURL;?>profile">My Account</a></li>
        <?php
          }
          else
          {
        ?>
             <li><a href="<?php echo BASEURL;?>login">Login</a></li>
         <?php
          }
        ?>
    </ul>
</div>