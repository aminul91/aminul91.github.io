<?php


$result = $this->db->get('user')->result_array();

         $category  = $this->db->get('category_name')->result_array();
   $c = "SELECT * from product_name WHERE category_id = 1"; 
  $cloth = $this->db->query($c)->result_array();
 $s = "SELECT * from product_name WHERE category_id = 2"; 
  $shoe = $this->db->query($s)->result_array();
  $e = "SELECT * from product_name WHERE category_id = 3"; 
  $elec = $this->db->query($e)->result_array();
  $f = "SELECT * from product_name WHERE category_id = 4"; 
  $fur = $this->db->query($f)->result_array();
   $or= "SELECT * from product_name WHERE category_id = 6"; 
  $orn = $this->db->query($or)->result_array();

  $cl = "SELECT * from user WHERE category_id = 7"; 
 $clock = $this->db->query($cl)->result_array();
  $bg = "SELECT * from user WHERE category_id = 5"; 
 $bag = $this->db->query($bg)->result_array();
 
  $foo = "SELECT * from user WHERE category_id = 8"; 
 $food = $this->db->query($foo)->result_array();
 $cmb = "SELECT * from user WHERE category_id = 12"; 
 $comb = $this->db->query($cmb)->result_array();
  $oth = "SELECT * from user WHERE category_id = 13"; 
 $other = $this->db->query($oth)->result_array();
$b =" SELECT shop_id FROM  product WHERE product_type_id =24";
     $mob = $this->db->query($b)->result_array();
     $y = array();
      $uni = array();
       $phn = array();
     foreach ($mob as $t)
               $y[] = $t['shop_id'];
     
       
                      $uni = array_unique($y);
                        $count = count($uni);
                     
                        foreach ($uni as $r)
                        {
                            $pq =" SELECT brand_name,shop_id FROM user WHERE shop_id =$r";
                           $phn[] = $this->db->query($pq)->result_array();
                        }
                   
                        
             $ll =" SELECT shop_id FROM  product WHERE product_type_id =26";
     $mob = $this->db->query($ll)->result_array();
     $ly = array();
      $lu = array();
       $lap = array();
     foreach ($mob as $t)
               $ly[] = $t['shop_id'];
     
       
                      $lu = array_unique($y);
                        $count = count($lu);
                     
                        foreach ($lu as $lr)
                        {
                            $lp =" SELECT brand_name,shop_id FROM user WHERE shop_id =$lr";
                           $lap[] = $this->db->query($lp)->result_array();
                        }
                             
                        //var_dump($lap);
                       // exit;

?>



<div class="mainmenu">
				
                           <?php	foreach ($category as $c)
                {
                ?>
                             <a href="#"><div id="<?php echo $c['category_name']; ?>" > <?php echo $c['category_name']; ?>
				</div></a>
				<?php 
                }
                ?>
   <a href="#"> <div id="Mobile">Mobile</div></a>
   <a href="#"> <div id="Laptop-corner">Laptop</div></a>
                       
		</div>



                  
                   
                      <div id="brandshirt" style="margin-top:92px;">
                   <?php 
                    foreach ($result as $row)
                              {
                         if($row['category_id'] ==1)
                        {
 
                         ?>
                         <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/3');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                       <?php 
                         }
                    }?>
                    </div>
                    <div id="brandshari" style="margin-top:118px;">
                      <?php 
                    foreach ($result as $row)
                              {
                         if($row['category_id'] ==1)
                        {
 
     ?>
                         <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/4');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                       <?php 
                         }
                    }?>
                    </div>
                    <div id="brandsalwar" style="margin-top:126px;">
                     <?php 
                    foreach ($result as $row)
                              {
                         if($row['category_id'] ==1)
                        {
 
     ?>
                         <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/5');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                       <?php }
                    }?>
                    </div>
                    <div id="brandpant" style="margin-top:150px;">
                         <?php 
                    foreach ($result as $row)
                              {
                         if($row['category_id'] ==1)
                        {
 
     ?>
                         <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/6');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                       <?php }
                    }?>
                    </div>
                    <div id="brandskirt" style="margin-top:176px;">
                            <?php 
                    foreach ($result as $row)
                              {
                         if($row['category_id'] ==1)
                        {
 
     ?>
                         <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/7');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                       <?php }
                    }?>
                    </div>
                    <div id="brandtshirt" style="margin-top:200px;">
                         <?php 
                    foreach ($result as $row)
                              {
                         if($row['category_id'] ==1)
                        {
 
     ?>
                         <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/8');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                       <?php }
                    }?>
                    </div>

 <div id="brandcother" style="margin-top:222px;">
                         <?php 
                    foreach ($result as $row)
                              {
                         if($row['category_id'] ==1)
                        {
 
     ?>
                         <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/9');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                       <?php }
                    }?>
                    </div>

<div id= "shoemenudetail" style=" margin-top:68px;">
                             <?php foreach ($shoe as $sh)
                {
                ?>
                     <div id="<?php echo $sh['product_name']; ?>"> <a style="text-decoration: none;margin-bottom: 5px;" href = "<?php echo site_url('welcome/product/'.$sh['product_type_id']);?>"><?php echo $sh['product_name']; ?></a></div><br>
                     <?php 
                }
                ?>

                </div>

<div id= "electronicmenudetail" style=" margin-top:92px;">
                             <?php foreach ($elec as $e)
                {
                ?>
                     <div id="<?php echo $e['product_name']; ?>"> <a style="text-decoration: none;margin-bottom: 5px;" href = "<?php echo site_url('welcome/product/'.$e['product_type_id']);?>"><?php echo $e['product_name']; ?></a></div><br>
                     <?php 
                }
                ?>

                </div>

<div id= "furnituremenudetail" style=" margin-top:118px;">
                             <?php foreach ($fur as $f)
                {
                ?>
                     <div id="<?php echo $f['product_name']; ?>"> <a style="text-decoration: none;margin-bottom: 5px;" href = "<?php echo site_url('welcome/product/'.$f['product_type_id']);?>"><?php echo $f['product_name']; ?></a></div><br>
                     <?php 
                }
                ?>

                </div>
<div id= "bagmenudetail" style=" margin-top:146px;">
                             <?php foreach ($bag as $b)
                {
                ?>
                     <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$b['shop_id'].'/5');?>" style="text-decoration: none">  <?php echo $b['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                }
                ?>

                </div>




<div id= "ornamentsmenudetail" style=" margin-top:170px;">
                             <?php foreach ($orn as $o)
                {
                ?>
                     <div id="<?php echo $o['product_name']; ?>"> <a style="text-decoration: none;margin-bottom: 5px;" href = "<?php echo site_url('welcome/product/'.$o['product_type_id']);?>"><?php echo $o['product_name']; ?></a></div><br>
                     <?php 
                }
                ?>

                </div>
<div id= "clockmenudetail" style=" margin-top:196px;">
                             <?php foreach ($clock as $clo)
                {
                ?>
                     <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$clo['shop_id'].'/7');?>" style="text-decoration: none">  <?php echo $clo['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                }
                ?>

                </div>
<div id= "mobilemenudetail" style=" margin-top:300px;">
                             <?php foreach ($phn as $ph)
                {
                ?>
                     <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$ph['0']['shop_id'].'/3');?>" style="text-decoration: none">  <?php echo $ph['0']['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                }
                ?>

                </div>

<div id= "foodmenudetail" style=" margin-top:222px;">
                             <?php foreach ($food as $fd)
                {
                ?>
                     <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$fd['shop_id'].'/8');?>" style="text-decoration: none">  <?php echo $fd['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                }
                ?>

                </div>
<div id= "combindmenudetail" style=" margin-top:242px;">
                             <?php foreach ($comb as $cm)
                {
                ?>
                     <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$cm['shop_id'].'/12');?>" style="text-decoration: none">  <?php echo $cm['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                }
                ?>

                </div>
<div id= "laptopmenudetail" style=" margin-top:328px;">
                             <?php foreach ($lap as $Lp)
                {
                ?>
                     <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$Lp['0']['shop_id'].'/3');?>" style="text-decoration: none">  <?php echo $Lp['0']['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                }
                ?>

                </div>


<div id= "othermenudetail" style=" margin-top:274px;">
            <?php foreach ($other as $ot)
                {
                ?>
                     <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$ot['shop_id'].'/13');?>" style="text-decoration: none">  <?php echo $ot['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                }
                ?>
   
                </div>


<?php $j=70; ?>
             <?php for($i=1;$i<4;$i++)
             {
             ?>
                    <div id="brandshoe<?php echo $i;?>"  style="margin-top:<?php echo $j;?>px;">
    <?php 
    $j=$j+22;
                    foreach ($result as $row)
                              {
                        if($row['category_id'] ==2)
                        {
 
     ?>
                        <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/2');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                        }
                    }?>
                    </div>
            
		 <?php
                 }
             ?>


<?php $j=92; ?>
             <?php for($i=1;$i<12;$i++)
             {
             ?>
                    <div id="brandelec<?php echo $i;?>"  style="margin-top:<?php echo $j;?>px;">
    <?php 
    $j=$j+24;
                    foreach ($result as $row)
                              {
                        if($row['category_id'] ==3)
                        {
 
     ?>
                        <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/3');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                        }
                    }?>
                    </div>
            
		 <?php
                 }
             ?>

<?php $k=112; ?>
             <?php for($i=1;$i<10;$i++)
             {
             ?>
                    <div id="brandfur<?php echo $i;?>"  style="margin-top:<?php echo $k;?>px;">
    <?php 
    $k=$k+24;
                    foreach ($result as $row)
                              {
                        if($row['category_id'] ==4)
                        {
 
     ?>
                        <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/4');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                        }
                    }?>
                    </div>
            
		 <?php
                 }
             ?>

<?php $m=170; ?>
             <?php for($i=1;$i<5;$i++)
             {
             ?>
                    <div id="brandorn<?php echo $i;?>"  style="margin-top:<?php echo $m;?>px;">
    <?php 
    $m=$m+24;
                    foreach ($result as $row)
                              {
                        if($row['category_id'] ==6)
                        {
 
     ?>
                        <div id ="brand">
                            <a href="<?php echo site_url('welcome/brandmenu/'.$row['shop_id'].'/6');?>" style="text-decoration: none">  <?php echo $row['brand_name'];
                                   ?>
                            </a>
                        </div>
                     <?php 
                        }
                    }?>
                    </div>
            
		 <?php
                 }
             ?>

