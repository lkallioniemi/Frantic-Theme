<?php include("categorizr.php");?>
<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<title><?php bloginfo( 'name' ) ?></title>

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta property="og:title" content="<?php bloginfo( 'name' ) ?>">
<meta property="og:description" content="">
<meta property="og:type" content="website">
<meta property="og:url" content="http://.com">
<meta property="og:image" content="">
<meta property="fb:admins" content="">

<script>
var siteUrl = '<?php get_option('home');?>';
var templateUrl = '<?php get_bloginfo("template_url"); ?>';
</script>
<script>

<!--[if gt IE 8]><!-->
<link rel="stylesheet" href="<?php get_bloginfo("template_url"); ?>/css/style.css">
<!--<![endif]-->
	
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php get_bloginfo("template_url"); ?>/css/ie.css">
<![endif]-->

<!-- scripts -->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/modernizr-2.5.3-min.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/ie/nwmatcher-min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/ie/selectivizr-min.js"></script>
<![endif]-->

<script src="<?php echo get_option('home');?>/quickconcat.php?files=<?php bloginfo( 'template_directory' ); ?>/js/lib/enhance.js,<?php bloginfo( 'template_directory' ); ?>/js/enhance.config.js" defer async></script>

<!-- ICONS -->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="shortcut icon" href="/favicon.png">

<link rel="canonical" href="/">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php //if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="l-wrap">
	
	<div class="l-content">

		<header role="banner">
			<h1>Framework</h1>
		</header><!-- end banner -->

		<nav role="navigation">
		
			<ul class="menu">
			<?php wp_nav_menu(array('container' => '','menu' => 'main', 'items_wrap' => '%3$s')); ?>
			</ul>
		
		</nav><!-- end navigation -->

	</div><!-- end content -->
