<?php
/**
 * The 404 Error template
 *
 * @subpackage pdxchambers-basic
 * @since PDXChambers Basic 1.0
 */
 get_header();
?>
<div id="site-content">
	<div id="post-wrapper">
		<div id="four-oh-four">
			<h1>404 Not Found</h1>
			<p>Uh oh, this is embarassing but I can't find the content you're looking for.
			Please check your link and try again or <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">start over</a>.</p>
		</div>
     </div><!-- end Post-Wrapper -->
</div><!-- Site Content -->
<?php
	get_footer();
?>

