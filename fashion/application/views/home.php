<?php
 $sql = "SELECT brand_name FROM user ";
       $catagory = $this->db->query($sql)->result_array();
?>
   
<div class="mainbody">
      <div class="container">
          
          
          <div class="row">
              
                                 <div class="col-sm-8" style="margin-top:02px;">
								<section id="slider"><!--slider-->
                                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								
								<div class="col-sm-8">
									<img src="<?php echo base_url();?>images/slide1.jpg" class="girl img-responsive" alt="" style="height: 200px;width: 400px"/>
									
								</div>
							</div>
							<div class="item">
								
								<div class="col-sm-8">
									<img src="<?php echo base_url();?>images/slide2.jpg" class="girl img-responsive" alt="" style="height: 200px;width: 400px"/>
									
								</div>
							</div>
							
							<div class="item">
								
								<div class="col-sm-8">
									<img src="<?php echo base_url();?>images/slide3.jpg" class="girl img-responsive" alt="" style="height: 200px;width: 400px"/>
									
								</div>
							</div>
                                                    
                                                       <div class="item">
								
								<div class="col-sm-8">
                                                                    <img src="<?php echo base_url();?>images/slide0.jpg" class="girl img-responsive" alt="" style="height: 200px;width: 400px" />
									
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
                                
                                        
                     <div class="row" style="height: 230 px;">
            
                    
                </div>
					
	</div>
              
              <div  class="col-md-3" style="margin-left: -10px;">
        
                  
                      
                  <div class=" wow fadeInUp" data-wow-delay="0.4s" style="background-color: bisque">
   		                 <ul>
   				 	 	
   				 	 	<li >
                                                    <div style="margin-left: -30px;margin-top: -5px;height: 200px" class="col-md-12">
                                                        <h2 style="margin-top: 5px">Order Now</h2>
                                                    </div> 
                                                    <div style="margin-left: -30px;margin-top: -5px;height: 30px" class="col-md-12">
                                                        <h3 style="margin-top: 5px;color: red">Order Now</h3>
                                                    </div>
                                                    <br>
                                                    <div style="margin-top: 15px;margin-bottom: 15px;">
   				 	 		<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
                                                            <li> <h4 style="margin-left:-70px;margin-top: 15px">CALL: +8801817619847 </h4>   </li>
                                                            <li><h4 style="margin-left:-70px;margin-top: -5px">Email:- sacasda</h4></li>
			
		 	                               </ul>
                                                    </div> 		
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   			</div>
                     
               
          </div>
              
          
          <div class="row">
          <div class="col-md-10"style="margin-top: -25px">
              <div class="col-md-2" style="height: 200px;background-color: antiquewhite;margin-top: 55px">
                  <marquee direction="down" >
                      <div class="col-md-14" style="height: 200px">
                      <div class="col-md-14" style="height: 30px;background-color: burlywood;color: red">
                      news1
                      </div>
                   <div class="col-md-12" style="height: 30px;background-color: burlywood;color: red;margin-top: 10px">
                      news2
                      </div></div></marquee>
              </div>
            <div class="col-md-5" >
                
                <h3 style="color: darkorange">Welcome to Replica</h3>
                <div class="col-md-12" style="border-radius: 10px;background-color: white">
                <p style="color: black;" >Replica
Makes your life fashionable.

Founded on 2013.Replica has established itself as the fastest growing company in high-end fashion industry. combining fashion and innovation, our brand prides itself on exceptional standard design.

Replica creates various exclusive limited edition fabrics to cater to our client. 
The design lab is located in South Banasri of Dhaka. Every product is created by master designers, and reinforced with single and double needle stitching along the seams for extended durability and captivating look.

Replica now at Dhaka,Comilla,Gazipur,Barisal…..
Now Replica also provides consumer products,jwellery,shoes,gift item throughout the country.

Replica makes your life fashionable. </p>
                </div>
            </div>
            <div class="col-md-3" style="height: 200px;margin-top: 55px">
                
                	<div class="left-sidebar">
						<h2>LIST</h2>
						<div class="panel-group category-products" id="accordian">
			
                                                    
                                                    
                                                    <div class="panel panel-default" >
                                                              <div class="panel-heading" style="background-color: aqua">
                                                                      
                                                                    <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php  echo "rfbl";?>">
				                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
								<?php  echo " about rfbl";?>
							</a>
                                                               
							</h4>
                                                                         
								</div>
                                                        
                       
                                                        </div>
                                                        
                                                      <div class="panel panel-default" >
                                                              <div class="panel-heading" style="background-color: gold">
                                                                      
                                                                    <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php  echo "rfbl";?>">
				                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
								<?php  echo " our product";?>
							</a>
                                                               
							</h4>
                                                                         
								</div>
                                                        
                       
                                                        </div>      
                                                            
                                                       <div class="panel panel-default" >
                                                              <div class="panel-heading" style="background-color: gold">
                                                                      
                                                                    <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php  echo "rfbl";?>">
				                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
								<?php  echo " order us";?>
							</a>
                                                               
							</h4>
                                                                         
								</div>
                                                        
                       
                                                        </div>                                      
                                                    
       </div>
                                        </div>
            </div>
             </div>
              </div>
          <div class="row col-md-10">
              <div style="height: 300px;margin-top: 55px">
                  
                  
                  	<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">OUR PRODUCTS</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													
													<p>Easy Polo Black Edition</p>
													
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													
													<p>Easy Polo Black Edition</p>
													
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
												
													<p>Easy Polo Black Edition</p>
													
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
													<img src="images/home/recommend1.jpg" alt="" />
													
													<p>Easy Polo Black Edition</p>
													
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
												
													<p>Easy Polo Black Edition</p>
													
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													
													<p>Easy Polo Black Edition</p>
													
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
              </div>
          </div>
      </div>
      </div>


<script>
         jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
               animtype      : 'slide',
            height      : 300,
            width       : 450,
            responsive  : true
          });

        });
          jQuery(document).ready(function($) {

          $('#small').bjqs({
               animtype      : 'fade',
            height      : 250,
            width       : 300,
            responsive  : true
          });

        });
    </script>