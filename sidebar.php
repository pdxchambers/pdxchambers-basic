<?php 
/**
 * The sidebar template
 *
 * @package WordPress
 * @subpackage pdxchambers-basic
 * @since PDXChambers Basic 1.0
 */
?>
<div id="site-sidebar">
<?php if ( is_active_sidebar( 'site-sidebar' ) ) { ?>
		<div id="sidebar-widget-1" class="primary-sb-widget" role="complimentary">
			<?php dynamic_sidebar( 'site-sidebar' ); ?>
		</div>
<?php } ?>
</div>