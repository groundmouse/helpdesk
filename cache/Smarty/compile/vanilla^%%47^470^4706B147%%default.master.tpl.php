<?php /* Smarty version 2.6.25, created on 2019-04-28 02:11:42
         compiled from /Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 4, false),array('function', 'text', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 10, false),array('function', 'link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 37, false),array('function', 'logo', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 37, false),array('function', 'signinout_link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 64, false),array('function', 'dashboard_link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 65, false),array('function', 'discussions_link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 66, false),array('function', 'categories_link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 67, false),array('function', 'activity_link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 68, false),array('function', 'inbox_link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 69, false),array('function', 'profile_link', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 70, false),array('function', 'custom_menu', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 117, false),array('function', 'searchbox', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 119, false),array('function', 'breadcrumbs', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 152, false),array('function', 'module', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 154, false),array('function', 'event', '/Applications/AMPPS/www/front-desk/themes/KPOLY/views/default.master.tpl', 167, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
<?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Pacifico' rel='stylesheet' type='text/css'>

<?php echo '
<style>
.PanelColumn li.steam-btn a:hover,.loginbtn .Button:hover,.loginbtn .Button:focus,.fic > li > a,.Count,.PanelCategories li:hover,.PageControls li.steam-btn a:hover{ '; ?>
background:<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
;<?php echo ' }
.ofoldleft,.ofoldright {border-bottom: 15px solid '; ?>
<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
<?php echo ';}
.CreateAccount a,.uiusx a,.PanelCategories li:hover .Count,#social a:hover,.lbflinks a:hover,.footerw strong,a:hover,.AuthorWrap a,.iipo a {
color: '; ?>
<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
<?php echo ';}
.CreateAccount a {color: '; ?>
<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
<?php echo ' !important;}
.fic > li > a:hover,.fic > li > a:focus{ '; ?>
background:<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
<?php echo ' !important; }
.foldbottom,.e1{background: '; ?>
<?php echo smarty_function_text(array('code' => 'FooterMenuColor','default' => $this->_tpl_vars['FooterMenuColor']), $this);?>
<?php echo ';}
.ifmag img,.iipo img {border: 1px solid '; ?>
<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
<?php echo ';}
.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {background: '; ?>
<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
<?php echo ' !important;}
.navbar-brand, .navbar-nav > li > a:hover {border-top: 3px solid '; ?>
<?php echo smarty_function_text(array('code' => 'GreenColor','default' => $this->_tpl_vars['GreenColor']), $this);?>
<?php echo ';}
.PageDescription,#Panel .FilterMenu li.AllCategories:hover,#Panel .FilterMenu li.Activities:hover,#Panel .FilterMenu li.Discussions:hover,#Panel .FilterMenu li:hover,.Tag,.Button,.Button:hover,.Button:focus,.PanelColumn li.steam-btn a,.registerbtn .Button:hover,.registerbtn .Button:focus{background:'; ?>
<?php echo smarty_function_text(array('code' => 'VioletColor','default' => $this->_tpl_vars['VioletColor']), $this);?>
<?php echo ';}
.LastCommentBy a,#Panel .FilterMenu li:hover .Count,.CategoryFilter a,.ffg a:link{color:'; ?>
<?php echo smarty_function_text(array('code' => 'VioletColor','default' => $this->_tpl_vars['VioletColor']), $this);?>
<?php echo ';}
header {background: '; ?>
<?php echo smarty_function_text(array('code' => 'HeaderMenuColor','default' => $this->_tpl_vars['HeaderMenuColor']), $this);?>
<?php echo ';}
.footerwidgets {display:'; ?>
<?php echo smarty_function_text(array('code' => "FooterWidgets-Enter-Block-or-None",'default' => $this->_tpl_vars['FooterWidgets']-$this->_tpl_vars['nter']-$this->_tpl_vars['lock']-$this->_tpl_vars['r']-$this->_tpl_vars['one']), $this);?>
<?php echo ';}
</style>
'; ?>


</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">



<header>
<div class="container">
<div class="row origamt">
<div class="col-md-2 logocol">

            <strong class="SiteTitle"><a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a></strong>


</div>
<div class="col-md-10 frx menucol">

<!--/.nav-collapse -->
        <div class="navbar-collapse collapse origamit">
          <ul class="nav navbar-nav">
			  


		
<li class="dropdown foldresd searchinputl">
              <form method="get" action="/vanillaorigami/search">
<div>
<input type="text" id="Form_Searchf" name="Search" value="" placeholder="Search" class="InputBox"><input type="submit" id="fForm_Go" value="Go" class="Button">
</div>
</form>

</li>

			
          <li class="dropdown foldresd">
              <a href="#" class="login dropdown-toggle tog" data-toggle="dropdown"><i class="fa fa-bars"></i></a>
              <ul class="dropdown-menu etop pog" role="menu">

<?php echo smarty_function_signinout_link(array(), $this);?>
			  
<?php echo smarty_function_dashboard_link(array(), $this);?>

<?php echo smarty_function_discussions_link(array(), $this);?>

<?php echo smarty_function_categories_link(array(), $this);?>

<?php echo smarty_function_activity_link(array(), $this);?>

<?php echo smarty_function_inbox_link(array(), $this);?>

<?php echo smarty_function_profile_link(array(), $this);?>
			  
		 
<li><a href="#"><i class="fa fa-link"></i> First Link</a></li>

<li><a href="#"><i class="fa fa-link"></i> Second Link</a></li>

<li><a href="#"><i class="fa fa-link"></i> Third Link</a></li>

<li><a href="#"><i class="fa fa-link"></i> Fourth Link</a></li> 
	  		  
			  
			  
              </ul>
            </li>			

		
	
						

		<ul class="nav navbar-nav fic">
			  <?php echo smarty_function_signinout_link(array(), $this);?>
	
		    </ul>	
          </ul>
		      
        </div>
<!--/.nav-collapse -->



</div>
</div>
<div class="row origamenu"><div class="col-md-12">
<div class="foldmenu"><div class="foldright"></div><div class="foldleft"></div><div class="orfoldleft"></div><div class="orfoldright"></div><div class="ofoldright"></div><div class="ofoldleft"></div>


<!--/.nav-collapse -->
        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul class="nav navbar-nav foldres" style="float:left;">
              
		  
		  
   <?php echo smarty_function_dashboard_link(array(), $this);?>

   <?php echo smarty_function_discussions_link(array(), $this);?>
    <?php echo smarty_function_categories_link(array(), $this);?>


   <?php echo smarty_function_activity_link(array(), $this);?>

   <?php echo smarty_function_inbox_link(array(), $this);?>

   <?php echo smarty_function_profile_link(array(), $this);?>

   <?php echo smarty_function_custom_menu(array(), $this);?>

		    
<li class="SiteSearchi"><?php echo smarty_function_searchbox(array(), $this);?>
	</li>		
			
			
          </ul>
        </div>

<!--/.nav-collapse -->

</div>


</div></div>


</div>
</header>







            




   <div id="Frame">

      <div id="Body">
      <br><br>
         <div class="container">
            <div class="BreadcrumbsWrapper"><i class="el-icon-home"></i> <?php echo smarty_function_breadcrumbs(array(), $this);?>
</div>
            <div class="Column PanelColumn" id="Panel">
               <?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

               <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

                
            </div>
            <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
         </div>
      </div>
      <div id="Foot">
         <div class="container">
            <?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

         </div>
      </div>
   </div>
   <?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

   
   
   
   
   
<div class="orifooter">

<div class="container">


<div class="row origamenu"><div class="col-md-12">
<div class="foldmenu foldbottom"><div class="foldright e1"></div><div class="foldleft e1"></div><div class="orfoldleft e2"></div><div class="orfoldright e2"></div><div class="ofoldright e3"></div><div class="ofoldleft e3"></div>
<div class="stat1"><a href="#" class="kpoly_power" title="KOFORIDUA POLY ONLINE HELP DESK">Powered by KPOLY</a>
</div>

</div>


</div></div>

<div class="row footerwidgets">



<div class="footerw col-md-4"><div class="emid"><img src="http://i.imgur.com/rnihYKC.png" alt="Origami" style="max-width: 50%;"></div>
<strong>Origami</strong> is the Japanese word for paper folding. ORI means to fold and KAMI means paper and involves the creation of paper forms usually entirely by folding.</div>
<div class="footerw col-md-2">
<h3 class="footitle">Useful Links</h3>
<div class="lbflinks">
<a href="#">Home</a>
<a href="#">Login or Register</a>
<a href="#">Memberlist</a>
<a href="#">Search</a>
<a href="#">Posts</a>

</div>
</div>
</div>

</div></div>   
   
   
   
   
   
   
   
   
</body>
</html>