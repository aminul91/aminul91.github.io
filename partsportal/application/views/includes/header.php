<?php
$sql = "SELECT * FROM parts_static_page WHERE status = 1";
$query = $this->db->query($sql);
$eData = result_array($sql);
?>
<div class="header">
            <div class="header_logo" style="margin-top:30px;">
                <div class="logo">
                    <a href="<?php echo BASEURL;?>"><img src="<?php echo BASEURL ;?>images/main_logo.png" alt="logo" /></a>
                </div>
                <div class="header_ads">
                    <img src="<?php echo BASEURL ;?>images/header_ads.png" alt="logo_ads" />
                </div>
            </div>
            <div class="title">
            	<h1 class="title_h1">Australia's FREE online marketplace for Equipment parts</h1>
            </div>
            <div class="header_menu">
            	<ul>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[0]['parts_name']?>"><?php echo $eData[0]['parts_name']?>&nbsp;-</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[1]['parts_name']?>"> &nbsp;<?php echo $eData[1]['parts_name']?>&nbsp; -</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[2]['parts_name']?>"> &nbsp;<?php echo $eData[2]['parts_name']?>&nbsp; -</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[3]['parts_name']?>"> &nbsp;<?php echo $eData[3]['parts_name']?>&nbsp; -</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[4]['parts_name']?>"> &nbsp;<?php echo $eData[4]['parts_name']?>&nbsp; -</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[5]['parts_name']?>"> &nbsp;<?php echo $eData[5]['parts_name']?>&nbsp; -</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[6]['parts_name']?>"> &nbsp;<?php echo $eData[6]['parts_name']?>&nbsp; -</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[7]['parts_name']?>"> &nbsp;<?php echo $eData[7]['parts_name']?>&nbsp; -</a></li>
                    <li><a href="<?php echo BASEURL?>parts/<?php echo $eData[8]['parts_name']?>"> &nbsp;<?php echo $eData[8]['parts_name']?></a></li>
                </ul>
            </div>
        </div>