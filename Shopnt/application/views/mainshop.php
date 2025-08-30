<?php //$c=count($product);
 //var_dump($c);
 //exit;
 ?>
<div class="container">
    <div class="row">
     
        <div class="col-sm-12"">
            <div class="panel price panel-red">
		<div class="panel-heading  text-center">
                    <h3><strong>WELCOME TO </strong><?php echo $shop['0']['brand_name'] ;?></h3>
		</div>
             </div>
        
     
    
    <div class="row">
         <div class="col-lg-4">
        <!--sütun başlangıç-->
            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    BRAND Description
                    <i class="fa fa-2x fa-plus-circle pull-right"></i>
                </div>
                <div class="panel-body">
                    <div id="DOING" class="kanban-centered">

                        <article class="kanban-entry grab" id="item5" draggable="true">
                            <div class="kanban-entry-inner">

                                <div class="kanban-label">
                                    <h2> <span>Brand Description:</span></h2>
                                    <p>
                                       <?php echo $shop['0']['brand_des'];?>  
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="kanban-entry grab" id="item6" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2>Brand Location:</h2>
                                    <p><strong> <?php echo $shop['0']['Location'];?></strong></p>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
                <div class="panel-footer">
                   
                                <div class="kanban-label">
                                    <h2>Brand Contact no:</h2>
                                    <p ><strong> <?php echo $shop['0']['contact_number'];?></strong></p>
                                </div>
                           
                       
                </div>
            </div>
            <!--sütun bitiş-->
         </div>
        
        <div class="col-lg-8">
            <?php $c=ceil(count($product)/3);
              $r=count($product);
              $k=0;
            for($i=0;$i<$c;$i++)
            {
                
            ?>
            <div class="row">
                <?php  
             for($j=0;$j<3;$j++)
             {
                 if($k<$r)
                 {
              ?>
        
                <div class="col-sm-4">
                    
                    <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1">
                <a href ="<?php echo site_url('welcome/fullshow/'.$product[$k]['product_id']);?>">
                  <img src="<?php echo base_url().'/images1/'.$product[$k]['product_image']; ?>" class="img-responsive" alt=""  /></a>                              
                  </div>
                  <div class="sale" class="img-responsive"><b> price:<?php echo $product[$k]['price'];?> taka</b></div>
   		
                  
                  </div> 
                 <div style="">
        <a href="<?php echo site_url('welcome/fullshow/'.$product[$k]['product_id']);?>">
       <button  style="background-color:mediumspringgreen;height:30px;width:200px;border-radius: 5px;">
           <b>See product description</b></button></a> 
                </div>
                   
   		</div>
                    
                </div>
                <?php 
             }
              $k=$k+1;
             }
             
            
            }
             ?>
                
                
            </div>
                
            
            
        </div>
        
</div>

            
        </div>
    </div>
<script>
            $(function () {
            var kanbanCol = $('.panel-body');
            kanbanCol.css('max-height', (window.innerHeight - 150) + 'px');

            var kanbanColCount = parseInt(kanbanCol.length);
            $('.container-fluid').css('min-width', (kanbanColCount * 350) + 'px');

            draggableInit();

            $('.panel-heading').click(function() {
                var $panelBody = $(this).parent().children('.panel-body');
                $panelBody.slideToggle();
            });
        });

        function draggableInit() {
            var sourceId;

            $('[draggable=true]').bind('dragstart', function (event) {
                sourceId = $(this).parent().attr('id');
                event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));
            });

            $('.panel-body').bind('dragover', function (event) {
                event.preventDefault();
            });

            $('.panel-body').bind('drop', function (event) {
                var children = $(this).children();
                var targetId = children.attr('id');

                if (sourceId != targetId) {
                    var elementId = event.originalEvent.dataTransfer.getData("text/plain");

                    $('#processing-modal').modal('toggle'); //before post


                    // Post data 
                    setTimeout(function () {
                        var element = document.getElementById(elementId);
                        children.prepend(element);
                        $('#processing-modal').modal('toggle'); // after post
                    }, 1000);

                }

                event.preventDefault();
            });
        }

    
    
    </script>
    
