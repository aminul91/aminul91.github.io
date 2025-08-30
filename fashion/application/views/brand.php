<?php
//var_dump($product);
//exit;
$c =  count($product);
 $query = array();
foreach($product as $pr)
{



 $sql = "SELECT * FROM product LIMIT 40";
       $query = $this->db->query($sql)->result_array();
      // var_dump($query);
      // exit;
   
}

$p=0;
$x =0;

?>


                   
                            <div class="row">
                                <div class="features_items"><!--features_items-->
                                            <h2 class="title text-center" style="color: #0184ff">Features Items</h2>
                                             </div>
                            <div class="col-sm-8 padding-right">
					
						<?php
                                                 foreach ($query as $product)
                                                {
                                                ?>
                                                <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div >
										<div class="productinfo text-center">
                                                                                    <img src="<?php echo base_url().'/images1/'.$product['product_image']; ?>" alt="" style="height:200px"/>
											<h2><?php echo $product['brand_name']  ?></h2>
                                                                                        <p style="color:white">EXCLUSIVE COLLECTION </p>
											<a href="<?php echo site_url('welcome/fullshow/'.'2');?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See product description</a>
										</div>
										
								</div>
								
							</div>
						</div>
                                            <?php
                                                }
                                           
                                                ?>
                                          
                                                
                                      
                                                
                                                
                                                
                                                
                                       
                            </div>
                            </div>
