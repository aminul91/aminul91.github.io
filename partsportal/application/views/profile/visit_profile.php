<div class="vist_profile">
    <div class="side_ber">
        <?php include 'left-menu.php'; ?>
    </div>
    <div class="main_tab">
    	<!-- <span class="titleBox">[<a href="<?php echo BASEURL?>profile">Back</a>]</span> -->
        <div class="span_row">
            <div class="col-4">
                <h5 class="col_heading">For Sale</h5>
                <p class="col_paragruf"><a href="<?php echo BASEURL?>~<?php echo $username;?>/parts_list"><?php echo $total_listing;?> items for sale</a></p>
            </div>
            <div class="col-4">
                <h5 class="col_heading">Address</h5>
                <p class="col_paragruf"><?php echo $address;?></p>
            </div>
            <div class="col-4">
                <h5 class="col_heading">Contact</h5>
                <p class="col_paragruf">Phone: <?php echo $contact_person_phone;?></p>
                <p class="col_paragruf">Email: <?php echo $contact_person_email;?> </p>
            </div>
        </div>
    </div>
</div>