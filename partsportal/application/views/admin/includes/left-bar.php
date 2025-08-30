<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
      <a class="navbar-brand" href="<?php echo BASEURL?>admin"><?php echo $this->config->item('project_title');?></a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <!--li class="active"><a href="javascript:void(0);"><i class="fa fa-file"></i> Blank Page</a></li-->
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Category <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>admin/category_list">Category List</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Make / Model <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>admin/make_model_list">Make/Model List</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Suggestion Box <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>admin/suggestion_box">Suggestion Box</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Package <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>admin/package_list">Package List</a></li>
        </ul>
      </li>
      <!--li>
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Newslatter</a>
      </li-->
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Newslatter <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>newsletter">Newsletter</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Seller <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>seller_list">Seller List</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> FAQ manager <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>faq_list">FAQ List</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Parts List <b class="caret"></b></a>
        <ul class="dropdown-menu">          
            <li><a href="<?php echo BASEURL?>admin/member-parts-list" >Parts List</a></li>
        </ul>
      </li>
     
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Static Page <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>admin/static_page/2">About us</a></li>
          <li><a href="<?php echo BASEURL?>admin/static_page/3">Advertise with us</a></li>
          <li><a href="<?php echo BASEURL?>admin/static_page/4">Business Options</a></li>
          <li><a href="<?php echo BASEURL?>admin/static_page/5">Safety - for Buying & Selling</a></li>
          <li><a href="<?php echo BASEURL?>admin/static_page/6">Buy Parts - Overseas Dealer</a></li>
          <li><a href="<?php echo BASEURL?>admin/static_page/7">Scam Safety Tips</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Menu Description <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Transport">Transport</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Earthmoving">Earthmoving</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Mining">Mining</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Agriculture">Agriculture</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Marine">Marine</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Tyres">Tyres</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Lubes">Lubes</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Manuals">Manuals</a></li>
          <li><a href="<?php echo BASEURL?>admin/menu_desc/Tools">Tools</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Advertise <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASEURL?>admin/advertise_list">Advertise Listing</a></li>
        </ul>
      </li>
      
    </ul>

    <ul class="nav navbar-nav navbar-right navbar-user">       
      <li class="dropdown user-dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo admin_username();?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
          <!--li><a href="javascript:void(0);"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li-->
          <li><a href="javascript:void(0);"><i class="fa fa-gear"></i> Settings</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo BASEURL?>admin/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>