<?php 
/**
 * The header template
 *
 * @package WordPress
 * @subpackage pdxchambers-basic
 * @since PDXChambers Basic 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body id="bodyTag" <?php body_class(); ?>>
		<div id="site-container">
			<header id="site-header">
				<div id="title-bg">
					<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 id="site-description"><?php echo get_bloginfo( 'description' ); ?></h2>
				</div>
			<?php 
				/*Main Site Navigation*/
				wp_nav_menu( array(
					'container' 	 => 'nav',
					'container_id'	 => 'site-nav',
					'menu_class'     => 'main-nav',
					'theme_location' => 'pdxc-main-menu',
				) );
			?>
			</header>
			
