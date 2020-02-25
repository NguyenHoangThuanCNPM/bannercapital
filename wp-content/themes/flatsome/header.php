<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>
<style>
.nav-divided>li+li>a:after {
    content: "";
    position: absolute;
    top: 50%;
    width: 1px;
    border-left: 1px solid #FAA500;
    height: 15px;
    margin-top: -7px;
    left: -1em;
}
	
	.wpcf7 p:nth-child(2){
		width:78%;
		float:left;
	}
	.wpcf7 p:nth-child(3){
		width:20%;
		float:right;
	}

	.mb-0 {
    margin-bottom: 0 !important;
    border-top: 1px solid;
    padding-top: 17px;
}
	
	input[type='submit'], input[type='submit'].button, input[type='submit'], .primary {
    margin-left: 8px;
    text-shadow: none;
    border-radius: 50%;
    color: #fff;
    background-color: #FF9F00;
    background-image: none;
    border: none;
    box-shadow: none;
    text-transform: uppercase;
    font-style: italic;
    padding: 0.1em 0.5em 0.2em 0.5em;
    letter-spacing: .0625em;
    font-size: .9em;
    margin-top: -.135em;
}
	
	.gach > div.col-inner{
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    padding: 7px;
    padding: .4rem 0 0;
    border-top: 3px solid #FAA500;
    margin-bottom: 0;
}
	#logo {
    width: 200px;
    margin-top: 85px;
}
	
	p{
		font-size:15px;
	}
	
	
	
	
	
	@media only screen and (max-width: 600px) {
  #logo {
    
    margin-top: 0px;
}
}
</style>	
	
	
	
<body <?php body_class(); // Body classes is added from inc/helpers-frontend.php ?>>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

<?php do_action('flatsome_before_header'); ?>

<header id="header" class="header <?php flatsome_header_classes();  ?>">
   <div class="header-wrapper">
	<?php
		get_template_part('template-parts/header/header', 'wrapper');
	?>
   </div><!-- header-wrapper-->
</header>

<?php do_action('flatsome_after_header'); ?>

<main id="main" class="<?php flatsome_main_classes();  ?>">
