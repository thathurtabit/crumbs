<!doctype html>

<!-- 
320 and Up by Andy Clarke
Version: 3.0
URL: http://stuffandnonsense.co.uk/projects/320andup/
Apache License: v2.0. http://www.apache.org/licenses/LICENSE-2.0
-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title>Crumbs Theme - Getting web folks the money they're owed.</title>

<meta name="description" content="Crumbs Theme - is a free responsive WordPress or static holding page to use in place of a clients website when they have repeatedly ignored or refused to pay for your services.">
<meta name="author" content="Stephen Fairbanks for Ghosthorses.co.uk">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:url" content="<?php bloginfo('url'); ?>" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/og.jpg" />

<!-- For all browsers -->
<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/320andup.css">

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/selectivizr-min.js"></script>
<![endif]-->

<!-- JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.5.3-min.js"></script>

<!-- For iPhone 4 -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/h/apple-touch-icon.png"> -->
<!-- For iPad 1-->
<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/m/apple-touch-icon.png"> -->
<!-- For the new iPad -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/h/apple-touch-icon-144x144-precomposed.png"> -->
<!-- For iPhone 3G, iPod Touch and Android -->
<!-- <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/l/apple-touch-icon-precomposed.png"> -->
<!-- For Nokia -->
<!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/l/apple-touch-icon.png"> -->
<!-- For everything else -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<!--iOS -->
<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
<!-- <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/splash.png"> -->

<!-- <script>(function(){var p,l,r=window.devicePixelRatio;if(navigator.platform==="iPad"){p=r===2?"img/startup/startup-tablet-portrait-retina.png":"img/startup/startup-tablet-portrait.png";l=r===2?"img/startup/startup-tablet-landscape-retina.png":"img/startup/startup-tablet-landscape.png";document.write('<link rel="apple-touch-startup-image" href="'+l+'" media="screen and (orientation: landscape)"/><link rel="apple-touch-startup-image" href="'+p+'" media="screen and (orientation: portrait)"/>');}else{p=r===2?"img/startup/startup-retina.png":"img/startup/startup.png";document.write('<link rel="apple-touch-startup-image" href="'+p+'"/>');}})()</script> -->
<!--Microsoft -->

<!-- Prevents links from opening in mobile Safari -->
<!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->
<meta http-equiv="cleartype" content="on">
</head>

<body class="clearfix">

<header role="banner" class="clearfix">
<h1 class="fittext">Crumbs.</h1>
</header>

<div class="content clearfix">

<h2>Ay crumb-a! Where has the site gone?</h2>

<p class="divider">It seems that the owners of <em><?php bloginfo('title'); ?></em> have been ignoring their invoices and friendly reminders and had decided not to pay their hard-working web folks. This placeholder page will stay in place until the owners of <em><?php bloginfo('title'); ?></em> decide to fulfill their end of the agreement and pay the people who have worked hard for them. Sorry for the inconvenience.</p>

</div><!-- / content -->

<footer role="contentinfo">


<p><span class="link"><i class="icon-twitter"></i> <a href="http://twitter.com/crumbstheme" target="_blank">crumbs on twitter</a></span>  <span class="hide-mobile">|</span>  <span class="link"><i class="icon-github"></i> <a href="http://github.com/thathurtabit/crumbs" target="_blank">crumbs on github</a></span></p>

<p>by <a href="http://ghosthorses.co.uk" target="_blank">ghosthorses.co.uk</a></p>

</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"><\/script>')</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/helper.js"></script>
<script>
var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
</body>
</html>