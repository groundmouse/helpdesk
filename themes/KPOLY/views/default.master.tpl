<!DOCTYPE html>
<html>
<head>
{asset name="Head"}
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Pacifico' rel='stylesheet' type='text/css'>

{literal}
<style>
.PanelColumn li.steam-btn a:hover,.loginbtn .Button:hover,.loginbtn .Button:focus,.fic > li > a,.Count,.PanelCategories li:hover,.PageControls li.steam-btn a:hover{ {/literal}background:{text code="GreenColor" default=$GreenColor};{literal} }
.ofoldleft,.ofoldright {border-bottom: 15px solid {/literal}{text code="GreenColor" default=$GreenColor}{literal};}
.CreateAccount a,.uiusx a,.PanelCategories li:hover .Count,#social a:hover,.lbflinks a:hover,.footerw strong,a:hover,.AuthorWrap a,.iipo a {
color: {/literal}{text code="GreenColor" default=$GreenColor}{literal};}
.CreateAccount a {color: {/literal}{text code="GreenColor" default=$GreenColor}{literal} !important;}
.fic > li > a:hover,.fic > li > a:focus{ {/literal}background:{text code="GreenColor" default=$GreenColor}{literal} !important; }
.foldbottom,.e1{background: {/literal}{text code="FooterMenuColor" default=$FooterMenuColor}{literal};}
.ifmag img,.iipo img {border: 1px solid {/literal}{text code="GreenColor" default=$GreenColor}{literal};}
.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {background: {/literal}{text code="GreenColor" default=$GreenColor}{literal} !important;}
.navbar-brand, .navbar-nav > li > a:hover {border-top: 3px solid {/literal}{text code="GreenColor" default=$GreenColor}{literal};}
.PageDescription,#Panel .FilterMenu li.AllCategories:hover,#Panel .FilterMenu li.Activities:hover,#Panel .FilterMenu li.Discussions:hover,#Panel .FilterMenu li:hover,.Tag,.Button,.Button:hover,.Button:focus,.PanelColumn li.steam-btn a,.registerbtn .Button:hover,.registerbtn .Button:focus{background:{/literal}{text code="VioletColor" default=$VioletColor}{literal};}
.LastCommentBy a,#Panel .FilterMenu li:hover .Count,.CategoryFilter a,.ffg a:link{color:{/literal}{text code="VioletColor" default=$VioletColor}{literal};}
header {background: {/literal}{text code="HeaderMenuColor" default=$HeaderMenuColor}{literal};}
.footerwidgets {display:{/literal}{text code="FooterWidgets-Enter-Block-or-None" default=$FooterWidgets-Enter-Block-or-None}{literal};}
</style>
{/literal}

</head>
<body id="{$BodyID}" class="{$BodyClass}">



<header>
<div class="container">
<div class="row origamt">
<div class="col-md-2 logocol">

            <strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>


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

{signinout_link}			  
{dashboard_link}
{discussions_link}
{categories_link}
{activity_link}
{inbox_link}
{profile_link}			  
		 
<li><a href="#"><i class="fa fa-link"></i> First Link</a></li>

<li><a href="#"><i class="fa fa-link"></i> Second Link</a></li>

<li><a href="#"><i class="fa fa-link"></i> Third Link</a></li>

<li><a href="#"><i class="fa fa-link"></i> Fourth Link</a></li> 
	  		  
			  
			  
              </ul>
            </li>			

		
	
						

		<ul class="nav navbar-nav fic">
			  {signinout_link}	
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
              
		  
		  
   {dashboard_link}
   {discussions_link}    {categories_link}

   {activity_link}
   {inbox_link}
   {profile_link}
   {custom_menu}
		    
<li class="SiteSearchi">{searchbox}	</li>		
			
			
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
            <div class="BreadcrumbsWrapper"><i class="el-icon-home"></i> {breadcrumbs}</div>
            <div class="Column PanelColumn" id="Panel">
               {module name="MeModule"}
               {asset name="Panel"}
                
            </div>
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
         </div>
      </div>
      <div id="Foot">
         <div class="container">
            {asset name="Foot"}
         </div>
      </div>
   </div>
   {event name="AfterBody"}
   
   
   
   
   
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