<?php
 //echo base_url();
//exit;




 $sql = "SELECT DISTINCT shop_id from product";
       $query[] = $this->db->query($sql)->result_array();
      
       
       foreach ($query as $q)
       {
           foreach ($q as$r)
           {
               $x[] = $r['shop_id'];
               
           }
       }
        
        foreach ($x as $t)
        {
       $sq = "SELECT * FROM product WHERE shop_id = ".$t;
       $row[] = $this->db->query($sq)->result_array();
        }
     
       // var_dump($row);
       // exit;
   
$p=0;
$x =0;

?>







 



<div class="col-sm-2"></div>
    
<div class="recommended_items col-sm-8" style="alignment-adjust: central"><!--recommended_items-->
                                            <h2 class="title text-center" style="color: orangered"> BRANDS</h2>
						<?php
                                                foreach($row as $im)
                                                {
                                                ?>
						<div id="recommended-item-carousel" class="carousel slide col-sm-4" data-ride="carousel">
							<div class="carousel-inner ">
								<div class="item active ">	
									<div class="col-sm-12">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                                                                                    <img src="<?php echo base_url().'/images1/'.$im[0]['product_image']; ?>" alt="" style="height: 200px" />
													
                                                                                                          <p style="color: greenyellow"><b><?php echo $im['0']['brand_name']  ?></b></p>
													<a href="<?php echo site_url('welcome/branddiv/'.$im['0']['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>VISIT THE BRAND</a>
												</div>
												
											</div>
										</div>
									</div>
									
									
								</div>
								<div class="item">	
									<div class="col-sm-12">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url().'/images1/'.$im['0']['product_image']; ?>" alt="" style="height: 200px"/>
												
													   <p style="color: greenyellow"><b><?php echo $im['0']['brand_name']  ?></b></p>
													<a href="<?php echo site_url('welcome/branddiv/'.$im['0']['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>VISIT THE BRAND</a>
												</div>
												
											</div>
										</div>
									</div>
									
									
								</div>
							</div>
									
						</div>
                                            <?php
                                               
                                                }
                                                ?>
					</div><!--/recommended_items-->
                                        <div class="col-sm-2"></div>