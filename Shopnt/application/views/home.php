<?php
//var_dump($brands);
//exit;
$c =  count($product);
$q1="SELECT * From product WHERE category_id =1 && product_class = 2";
        $cloth = $this->db->query($q1)->result_array();
        $q1="SELECT * From product WHERE category_id =1 && product_class = 1 ";
        $maincloth = $this->db->query($q1)->result_array();
         $mcl= count($maincloth);
        $e1="SELECT * From product WHERE category_id =3 && product_class = 1 ";
        $mainelec = $this->db->query($e1)->result_array();
        $mel= count($mainelec);
        $e1="SELECT * From product WHERE category_id =6 && product_class = 1 ";
        $mainjwl = $this->db->query($e1)->result_array();
        $mjw= count($mainjwl);
        $s1="SELECT * From product WHERE category_id =2 && product_class = 1 ";
        $mainsh = $this->db->query($s1)->result_array();
        $msh= count($mainsh);
        $f1="SELECT * From product WHERE category_id =4 && product_class = 1 ";
        $mainfur = $this->db->query($s1)->result_array();
        $mfr= count($mainsh);
         $clo="SELECT brand_name From user WHERE category_id =1";
        $clot = $this->db->query($clo)->result_array();
        
       // var_dump($clot);
       // exit;
        
      
?>
<div class="container" >
                  
			<div class="row">
                            <div class="col-sm-9" style="margin-top:15px;">
					<section id="slider"><!--slider-->
                                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-4">
									<h1><span>SHOPPING</span>INTRO</h1>
									<h2 >Why this website??</h2>
									<p>This is the website where you can visit all brands and shop of bangladesh at a time.Click your product and choose your brand </p>
									<button type="button" class="btn btn-default get" href="<?php echo site_url('welcome/create_shop');?>">Open your shop FREE</button>
								</div>
								<div class="col-sm-8">
									<img src="<?php echo base_url();?>images/Slide1.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-4">
									<h1><span>SHOPPING</span>INTRO</h1>
									<h2>Why this website??</h2>
									<p>If you have a shop in any market just open a shop and upload photo.Customers will know about your shop</p>
									<button type="button" class="btn btn-default get" href="<?php echo site_url('welcome/create_shop');?>">Open your shop FREE</button>
								</div>
								<div class="col-sm-8">
									<img src="<?php echo base_url();?>images/Slide2.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-4">
                                                                    <h1><span>SHOPPING</span>INTRO</h1>
									<h2>Why this website??</h2>
									<p>So now we dont have to visit all market. We will know abut every shop of market</p>
									<button type="button" class="btn btn-default get" href="<?php echo site_url('welcome/create_shop');?>">Open your shop FREE</button>
								</div>
								<div class="col-sm-8">
									<img src="<?php echo base_url();?>images/Slide3.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
                                                    
                                                       <div class="item">
								<div class="col-sm-4">
									<h1><span>SHOPPING</span>INTRO</h1>
									<h2>Why this website??</h2>
									<p>This is the website where you can visit all brands and shop of bangladesh.Click your product and choose your brand</p>
									<button type="button" class="btn btn-default get" href="<?php echo site_url('welcome/create_shop');?>">Open your shop FREE</button>
								</div>
								<div class="col-sm-8">
									<img src="<?php echo base_url();?>images/Slide4.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
                                </section><!--/slider-->
                                <br/><br/>
                                	<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#cloth" data-toggle="tab">CLOTH</a></li>
								<li><a href="#elec" data-toggle="tab">ELECTRONICS</a></li>
								<li><a href="#jewel" data-toggle="tab">JEWELERS</a></li>
								<li><a href="#shoe" data-toggle="tab">SHOE</a></li>
								<li><a href="#furni" data-toggle="tab">FURNITURES</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="cloth" >
                                                            <?php 
                                                            for($i=0;$i<$mcl;$i++)
                                                            {
                                                            ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                                                                            <img src="<?php echo base_url().'/images1/'.$maincloth[$i]['product_image']; ?>" alt="" style="height: 200px;width:150px;"/>
												<h2><?php echo $maincloth[$i]['brand_name']; ?></h2>
												
												<a href="<?php echo site_url('welcome/branddiv/'.$maincloth[$i]['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See full shop</a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php  
                                                            }
                                                            ?>
								
							
								
							</div>
							
							<div class="tab-pane fade" id="elec" >
                                                             <?php 
                                                            for($i=0;$i<$mel;$i++)
                                                            {
                                                            ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												   <img src="<?php echo base_url().'/images1/'.$mainelec[$i]['product_image']; ?>" alt="" style="height: 200px;width:150px;"/>
												<h2><?php echo $mainelec[$i]['brand_name']; ?></h2>
												
												<a href="<?php echo site_url('welcome/branddiv/'.$mainelec[$i]['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See full shop</a>
											</div>
											
										</div>
									</div>
								</div>
							
							 <?php  
                                                            }
                                                            ?>
							
							</div>
							
							<div class="tab-pane fade" id="jewel" >
                                                              <?php 
                                                            for($i=0;$i<$mjw;$i++)
                                                            {
                                                            ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url().'/images1/'.$mainjwl[$i]['product_image']; ?>" alt="" style="height: 200px;width:150px;"/>
												<h2><?php echo $mainjwl[$i]['brand_name']; ?></h2>
												
												<a href="<?php echo site_url('welcome/branddiv/'.$mainjwl[$i]['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See full shop</a>
											</div>
											
										</div>
									</div>
								</div>
								
							 <?php  
                                                            }
                                                            ?>
							
							</div>
							<div class="tab-pane fade active in" id="shoe" >
                                                            <?php 
                                                            for($i=0;$i<$msh;$i++)
                                                            {
                                                            ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                                                                            <img src="<?php echo base_url().'/images1/'.$mainsh[$i]['product_image']; ?>" alt="" style="height: 200px;width:150px;"/>
												<h2><?php echo $mainsh[$i]['brand_name']; ?></h2>
												
												<a href="<?php echo site_url('welcome/branddiv/'.$mainsh[$i]['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See full shop</a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php  
                                                            }
                                                            ?>
								
							
								
							</div>
							<div class="tab-pane fade" id="furni" >
								
							
							<?php 
                                                            for($i=0;$i<$mfr;$i++)
                                                            {
                                                            ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                                                                            <img src="<?php echo base_url().'/images1/'.$mainsh[$i]['product_image']; ?>" alt="" style="height: 200px;width:150px;"/>
												<h2><?php echo $mainfur[$i]['brand_name']; ?></h2>
											
												<a href="<?php echo site_url('welcome/branddiv/'.$mainfur[$i]['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See full shop</a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php  
                                                            }
                                                            ?>
								
							
								
							</div>
						</div>
					</div><!--/category-tab-->
                                        
                     <div class="row" style="height: 230 px;">
                        <div class="col-sm-12">
                            <div class="offering">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
   		  	  <h2>Our services</h2>
                          </div>
   		  	  <ul class="icons wow fadeInUp" data-wow-delay="0.4s">
   		  	  	 <li><i class="icon1"> </i><span class="one"> </span></li>
   		  	  	 <li><i class="icon2"> </i><span class="two"> </span></li>
   		  	  	 <li><i class="icon3"> </i><span class="three"> </span></li>
   		  	  	 <li><i class="icon4"> </i><span class="four"> </span></li>
   		  	  	 <li><i class="icon5"> </i></li>
   		  	  </ul>
   		  	  <div class="real">
                              <div class="col-md-2"></div>
                                <div class="col-md-10">
   		  	  	<h4>Open your shop,Visit all brands</h4>
                                </div>
   		  	  	<div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s1"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
                                             <p style="color: red"><b>IF YOU ARE BRAND OWNER</b></p>
   	   				   <p style="color: aqua">Click create your shop</p>
                                           <p style="color: aqua">Give your brand information </p>
                                            <p style="color: aqua">Rememner your username and password and upolad your product photo</p>
                                             <p style="color: aqua">Login later and upload more photo with prize</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s2"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
                                             <p style="color: #eea236"><b>IF YOU WANT to BUY</b></p>
                                            <p style="color: aqua">Choice your product</p>
                                           <p style="color: aqua">Choice your brand</p>
                                            <p style="color: aqua">You can select from menu</p>
                                            <p style="color: aqua">Visit all brands ,Buy the best</p>
                                                
                                           
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="clearfix"> </div>
   	   			 </div>
   		  	  </div>    
                            
                            	
					<div class="recommended_items"><!--recommended_items-->
                                            <h2 class="title text-center" style="color: orangered">RECOMMENDED BRANDS</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                                                                                    <img src="images/home/recommend1.jpg" alt="" style="height: 200px" />
													
                                                                                                        <p style="color: greenyellow"><b>REPLICA</b></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>SEE FULL SHOP</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" style="height: 200px"/>
												
                                                                                                        <p style="color: greenyellow"><b>REPLICA</b></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>SEE FULL SHOP</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" style="height: 200px" />
							
                                                                                                        <p style="color: greenyellow"><b>REPLICA</b></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>SEE FULL SHOP</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url().'/images1/'.$brands['0']['product_image']; ?>" alt="" style="height: 200px"/>
												
													   <p style="color: greenyellow"><b><?php echo $brands['0']['brand_name']  ?></b></p>
													<a href="<?php echo site_url('welcome/branddiv/'.$brands['0']['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>VISIT THE BRAND</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url().'/images1/'.$brands['1']['product_image']; ?>" alt="" style="height: 200px"/>
											
													 <p style="color: greenyellow"><b><?php echo $brands['1']['brand_name']  ?></b></p>
													<a href="<?php echo site_url('welcome/branddiv/'.$brands['1']['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>VISIT THE BRAND</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url().'/images1/'.$brands['2']['product_image']; ?>" alt="" style="height: 200px"/>
						
													 <p style="color: greenyellow"><b><?php echo $brands['2']['brand_name'];  ?></b></p>
													<a href="<?php echo site_url('welcome/branddiv/'.$brands['2']['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>VISIT THE BRAND</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
                                        
                                        
                            <div class="row">
                                <div class="features_items"><!--features_items-->
                                            <h2 class="title text-center" style="color: #0184ff">Features Items</h2>
                                             </div>
                            <div class="col-sm-12 padding-right">
					
						<?php
                                                for($i=0;$i<$c;$i++)
                                                {
                                                ?>
                                                <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div >
										<div class="productinfo text-center">
                                                                                    <img src="<?php echo base_url().'/images1/'.$product[$i]['product_image']; ?>" alt="" style="height:200px"/>
											<h2><?php echo $product[$i]['brand_name']  ?></h2>
                                                                                        <p style="color:white">EXCLUSIVE COLLECTION </p>
											<a href="<?php echo site_url('welcome/branddiv/'.$product[$i]['shop_id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See full Shop</a>
										</div>
										
								</div>
								
							</div>
						</div>
                                            <?php
                                                }
                                           
                                                ?>
                                          
                                                
                                      
                                                
                                                
                                                
                                                
                                       
                            </div>
                            </div>
                            
                            
                    </div>
                    
                </div>
					
	</div>
        <!--category-productsr-->                    
   <div class="col-sm-3"> 
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian">
			<?php $r=count($catagory); 
                                     for($i=0;$i<$r;$i++)
                                                                         
                                         {
                                                                         
                         ?>
                                                    
                                                    
                          <div class="panel panel-default">
                                                              <div class="panel-heading">
                                                                      
                                                                    <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php  echo $i;?>">
				                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
								<?php  echo $catagory[$i]['category_name'];?>
							</a>
                                                               
							</h4>
                                                                         
								</div>
                                                        
                                                         
                                    <div id="sportswear<?php  echo $i;?>" class="panel-collapse collapse">
							       		
                                                                <div class="panel-body">
                                                                    
									<ul>
                                                                            <?php 
                                                             $z=count($product_type[$i]);
                                                            
                                                            for($j=0;$j<$z;$j++)
                                                            
                                                            {
                                                                ?>
                            <div class="panel panel-default">               
                                                           <div class="panel-heading">
                                                                      
                                                               <h4 class="panel-title">
                                            <li><a data-toggle="collapse" data-parent="#sportswear<?php  echo $i;?>" href="#we<?php echo $j;?>">
                                                         <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                                        <?php echo $product_type[$i][$j]['product_name'];  ?> </a></li>                       
                                                               </h4>    
                                                            </div>
                                 
                                 <div id="we<?php echo $j;?>" class="panel-collapse collapse">
					<div class="panel-body">
							<ul>
                                                          <?php  
                                                            $l=count($clot);
                                                            for($n=0;$n<$l;$n++)
                                                            
                                                            {
                                                            
                                                          ?>
                                                            
					<li><a href="#"> <?php      
                                                             echo $clot[$n]['brand_name'];  
                                                             ?> </a></li>
                                                                
                                                        <?php 
                                                            }
                                                            
                                                            ?>
							
						        </ul>
					</div>
				</div>
                                                    
                            </div>
                                                   
                                                     <?php
                                                             
                                                            }
                                                            
                                                            ?>
						</ul>
					        </div>
                                                                            
                                                                
                                                                
                                       </div>
                                                            
                                                    
                                                            
                         </div>
                           <?php
                                                             
                                                            
                             }
                                                            
                             ?>                                    
                                                               
                                                           
                                                            
                                                                                            
                                                    
       </div>
                                        </div>
  </div>
  <!--category-products ends-->
                        
                            </div>
                                
                          	
                           
                           	
                                
			
		</div>

                    
                
     