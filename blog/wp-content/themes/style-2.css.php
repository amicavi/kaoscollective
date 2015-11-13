<?php 
require_once( '../../../wp-load.php' );
header("Content-type: text/css"); 

$tpo_body_backgroundcolor = tpo_options('tpo_bodybackgroundcolor','#fff');

$backgroundimage = get_background_image();

if (!$backgroundimage ) {
	$backgroundimage = 'images/body-bg.jpg';
}

$themecolor = '#d68614';
?>
body {
	color:#fff;
	background:url(<?php echo $backgroundimage ?>)  #000 no-repeat;
}

a, a:visited {
	color:#fff;
}

a:hover {
	color:<?php echo $themecolor; ?>;
}

::selection {
	color: #fff;
	background:<?php echo $themecolor; ?>;
	}
    
.sidebar a, .sidebar a:visited {
	color:#fff;
}
.sidebar a:hover{
	color:<?php echo $themecolor; ?>;
}
.sliderheading {
   color: #fff;
   background: #d68614;
   }
.slidercontent {
  color: #fff;
  background: #d68614; 
  }
.button, input[type=submit] {
    color: #fff;
    background-color: <?php echo $themecolor; ?>;
}
a.button, a.button:hover {
    color: #fff;
	text-decoration:underline;
}

.slidercontent a {
    color: #fff;
    font-style:italics;
}
#tagline {
 color:#fff;
 text-align: center;
 }
.readmore a {
	background:<?php echo $themecolor; ?>;
	color:#fff;
	padding: 5px 10px;
}

.readmore a:hover {
	background:#000;
}
.wrapper {
 background: #292929;
 }
.sidebar .searchbutton {
   background: url(images/search.png) 8px 8px no-repeat <?php echo $themecolor; ?>; 
   }
 .footer-widget-area .searchbutton  {
    background: url(images/search.png) 8px 8px no-repeat <?php echo $themecolor; ?>;  
 }
   #content .searchbutton {
  background: url(images/search.png) 8px 8px no-repeat <?php echo $themecolor; ?>;
  }
.post-title a {
	color:#fff;
}
.post-title a:hover {
	color:<?php echo $themecolor; ?>;
}

.home-post-title a {
	color:#fff;
}
.home-post-title a:hover {
	color:<?php echo $themecolor; ?>;
}

#header {
	background:none;
}

.featureslider {
	background:none;
}
#main-menu {
 background: #000; 
 }
#main-menu .menu a {
	color:#fff;
}

#main-menu .menu ul {
    background-color: #ececec;
}

#main-menu .menu ul a {
	color:#000;
}

#main-menu .menu li:hover > a {
    color:#fff;
    background-color:<?php echo $themecolor; ?>;
}

#main-menu .menu > li > a:hover, #main-menu .menu > li.dropdown:hover > a, #main-menu .menu > .current-menu-item > a,
#main-menu .current-menu-parent > a, navigation .current-menu-parent > a:hover, navigation .menu > .current-menu-item > a:hover {
color:#fff;
background-color:<?php echo $themecolor; ?>;
}      
#top-menu {
  background: #d68614;
  }
#top-menu .menu a {
  color: #fff; 
  }
#top-menu .menu ul {
   background: #fff;
   border-right: 1px solid #c0c0c0;
   border-left: 1px solid #c0c0c0;
   border-bottom: 1px solid #c0c0c0; 
   color: #000;
}
#top-menu .menu ul a {
   color: #1d1d1d; 
   }
.wp-pagenavi span.current {
    color: #fff;
    background-color:<?php echo $themecolor; ?>;
}
.home-feature-image {
  border: 1px solid #DBDBDB;
  background: #fff; 
}
.home-blogmeta-datetime {
 background-image: url(images/date.png); 
 }
 .blogmeta-datetime {
   background-image: url(images/date.png); 
 }
.home-blogmeta-author {
 background-image: url(images/author.png); 
 }
.blogmeta-author{
 background-image: url(images/author.png); 
 } 
.home-blogmeta-comment {
 background-image: url(images/comments.png);
 }
 .blogmeta-comment {
 background-image: url(images/comments.png);
 }
 .tag {
  color:#fff;
  }
.sidebar {
 color:#fff ; 
 }
.sidebar .recent-post img {
	 border: 1px solid #CDCDCD;
	background-color: #fff; 
}
.sidebar .widget_calendar table td#today, .sidebar #calendar_wrap table td#today {
	color: #fff ;
    background: <?php echo $themecolor; ?>;
} 

.sidebar .widget_calendar table caption, .sidebar #calendar_wrap table caption {
	color: <?php echo $themecolor; ?>;
}

.sidebar .widget_calendar table td a, .sidebar #calendar_wrap table td a {
	color: <?php echo $themecolor; ?>;
}

.sidebar .widget_calendar table td:hover, .sidebar #calendar_wrap table td:hover {
	color: <?php echo $themecolor; ?>;
}
.sidebar li ul li {
   padding-left: 15px;
   padding-top: 10px;
   margin-bottom: 0px;
}
.sidebar li ul li a {
 color:#fff;
 }
.sidebar .widget_tag_cloud div a, .sidebar .tagcloud a, .meta-tags a {
	color: #fff;
}
.buttons a:hover  {
  color:#fff !important;
}
.sidebar .recentpost-meta {
 color: <?php echo $themecolor; ?>;
 }

.sidebar .widget_tag_cloud div a:hover, .sidebar .tagcloud a:hover, .meta-tags a:hover {
	color: <?php echo $themecolor; ?>;
}

.sidebar .feedburner-email {
	border: 1px solid <?php echo $themecolor; ?>;
}

.sidebar #s {
	border: 1px solid <?php echo $themecolor; ?>;
}

.tabber .ul-tabs li.active {
	background:<?php echo $themecolor; ?>;
}

.tabber .ul-tabs li.active a {
	color:#fff;
}

.footer-widgets {
	color:#fff;
	background: #292929;
	border-top: 2px solid #d2d2d2;
}
.footer-widget-area li ul li {
   padding-left: 15px;
   padding-top: 10px;
   margin-bottom: 0px;
}
.footer-widgets a, .footer-widgets a:visited {
	color:#fff;
}
.footer-widgets a:hover {
	color:#d68614;
}
.footer-widget-area .widget-title, .footer-widget-area .footer-widget-title {
    color: #fff;
	background: #d68614;
}
.footer-widget-area .recent-post img {
  border: 1px solid #CDCDCD;
  background-color: #fff;
  }
 .footer-widget-area .recentpost-meta {
   color: <?php echo $themecolor; ?>; 
   }
 .feature-image {
  border: 1px solid #DBDBDB;
  background: #fff; 
  }
 #footer {
 border: 1px solid #DDDDDD; 
 }
 .footer-text {
  background: #000; 
  }
.footer-widget-area li {
   color:#fff;
   }
.footer-widget-area #s {
	border: 1px solid <?php echo $themecolor; ?>;
	}
#content .searchbutton {
  background: url(images/search.png) 8px 8px no-repeat <?php echo $themecolor; ?>;
}
.footer-widget-area .widget_calendar table caption, .footer-widget-area #calendar_wrap table caption {
	color: <?php echo $themecolor; ?>;
}

.footer-widget-area .widget_calendar table td a, .footer-widget-area #calendar_wrap table td a {
	color: <?php echo $themecolor; ?>;
}

.footer-widget-area .widget_calendar table td:hover, .footer-widget-area #calendar_wrap table td:hover {
	color: <?php echo $themecolor; ?>;
}

.footer-widget-area .widget_calendar table td#today, .footer-widget-area #calendar_wrap table td#today {
	color: #fff;
	background: <?php echo $themecolor; ?>;
	float:none;
}


.footer-widget-area .widget_tag_cloud div a, .footer-widget-area .tagcloud a, .meta-tags a {
	color: #fff;
}

.footer-widget-area .widget_tag_cloud div a:hover, .footer-widget-area .tagcloud a:hover, .meta-tags a:hover {
	color: <?php echo $themecolor; ?>;
}

.footer-widget-area .feedburner-email {
	border: 1px solid <?php echo $themecolor; ?>;
}


.tabber .ul-tabs li.active {
	background:<?php echo $themecolor; ?>;
}

.tabber .ul-tabs li.active a {
	color:#fff;
}
.tabber .tab-widget.current {
	border: 1px solid #505050;
}

.tabber .ul-tabs li {
	border-top: 1px solid #505050;
	border-left: 1px solid #505050;
	border-bottom: 1px solid #505050;
}

.tabber .ul-tabs li:last-child {
	border-right: 1px solid #505050;
}
.footer-widget-area .widget_shopping_cart_content .buttons a {
  color: #fff !important;
  float: left;
}