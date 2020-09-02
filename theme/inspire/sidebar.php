<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		sidebar.php
* @Package:		GetSimple
* @Action:		Inspire theme for GetSimple CMS
*
*****************************************************/


?>
<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Inspire theme for GetSimple CMS
*
*****************************************************/


?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<title>
<?php get_page_clean_title(); ?>
-
<?php get_site_name(); ?>
</title>
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
<link href="<?php get_theme_url(); ?>/assets/css/main.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
<link href="<?php get_theme_url(); ?>/assets/css/responsive.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
<link href="<?php get_theme_url(); ?>/assets/css/sidr.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
<link href="<?php get_theme_url(); ?>/assets/css/font-awesome.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
<?php get_header(); ?>
</head>

<body id="<?php get_page_slug(); ?>" >

<!-- Header -->
<div class="headerWrap" id="Get">
  <div class="headerTop"> </div>
  <div class="header"> 
    
    <!-- Logo -->
    <div class="logo">
      <h1><a href="<?php get_site_url(); ?>" >
        <?php get_site_name(); ?>
        </a></h1>
    </div>
    
    <!-- Mobile -->
    <div id="mobile-header"> <a id="responsive-menu-button" href="#sidr-main"><img src="<?php get_theme_url(); ?>/assets/images/menu.png" alt="Menu"></a> </div>
    
    <!-- Main Menu -->
    <div class="menuWrap">
      <nav class="mainMenu">
        <ul>
          <?php get_navigation(get_page_slug(FALSE)); ?>
        </ul>
      </nav>
    </div>
    
    <!-- socialMedia -->
    <nav class="socialMedia">
      <?php get_component('socialmedia'); ?>
    </nav>
  </div>
</div>
<div class="contentArea">
  <div class="mainContentArea"> 
    <!-- page content -->
    <div class="sidebar">
      <div class="sidebarLeft">
        <h1>
          <?php get_page_title(); ?>
        </h1>
        <?php get_page_content(); ?>
      </div>
      <div class="sidebarRight"> 
        <!-- include the sidebar template -->
        <?php include('sidebar.inc.php'); ?>
      </div>
    </div>
    <div class="footer">
      <p>Published on
        <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate>
          <?php get_page_date('F jS, Y'); ?>
        </time>
      </p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
<div id="twitterWrap">
  <div class="fa fa-twitter"></div>
  <div id="twitterHolder">
    <div id="twitterFeed"></div>
  </div>
</div>

<!-- Footer -->

<div class="footerWrap">
  <div class="footer">
    <div class="footerLogo">
      <h2><a href="<?php get_site_url(); ?>" >
        <?php get_site_name(); ?>
        </a></h2>
    </div>
    <div class="footermenu">
      <ul>
        <?php get_navigation(get_page_slug(FALSE)); ?>
      </ul>
    </div>
    <div class="copyright">
      <p>
        <?php get_component('footercontact'); ?>
        <br />
        <?php echo date('Y'); ?> &copy; Copyright</p>
    </div>
    
    <!-- To Top -->
    <div class="toTop"><a href="#toTop"></a>Top</div>
  </div>
</div>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements --> 

<!--[if lt IE 9]>

            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]--> 

<!-- Javascript --> 
<script src="<?php get_theme_url(); ?>/assets/js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="<?php get_theme_url(); ?>/assets/js/twitterFetcher.js"></script> 
<script>
      
      twitterFetcher.fetch('<?php get_component('twitterwidgetid'); ?>', '', 3, true, true, true, '', false, handleTweets);

      function handleTweets(tweets){
          var x = tweets.length;
          var n = 0;
          var element = document.getElementById('twitterFeed');
          var html = '<ul>';
          while(n < x) {
            html += '<li>' + tweets[n] + '</li>';
            n++;
          }
          html += '</ul>';
          element.innerHTML = html;
      }

function autoScroll() {
    var itemHeight = $('#twitterFeed li').outerHeight();
    var moveFactor = parseInt($('#twitterFeed').css('top')) + itemHeight;
    $('#twitterFeed').animate({
        'top' : moveFactor
    }, 'slow', 'linear', function(){
        $("#twitterFeed li:first").before($("#twitterFeed li:last"));
        $('#twitterFeed').css({'top' : '-6em'});
    });
};
var moveScroll = setInterval(autoScroll, 6000);
</script> 
<script src="<?php get_theme_url(); ?>/assets/js/sidr.js"></script> 
<script src="<?php get_theme_url(); ?>/assets/js/waypoints.js"></script>
<script src="<?php get_theme_url(); ?>/assets/js/waypoints-sticky.js"></script> 
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script> 
<script> jQuery('#responsive-menu-button').sidr({ name: 'sidr-main', source: '.mainMenu' }); </script> 
<script src="<?php get_theme_url(); ?>/assets/js/scripts.js"></script>
</body>
</html>