<?php
/**
 * The comment template
 *
 * @package WordPress
 * @subpackage pdxchambers-basic
 * @since PDXChambers Basic 1.0
 */
if (post_password_required() ) {
	return;
}//end post_password_required
?>
<div id="comments-wrapper">
<?php if (have_comments() ) { ?>
	<h2 class="comments-title">
    <?php
        printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'pdxchambers-basic' ),
            number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
    ?> 
	</h2>
	<ol class="comment-list">
	    <?php
	        wp_list_comments( array(
	            'style'       => 'ol',
	            'short_ping'  => true,
	            'avatar_size' => 74,
	        ) );
	    ?>
	</ol><!-- end comment-list -->
	<?php
	    // Are there comments to navigate through?
	    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="comment-nav" role="navigation">
	    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'pdxchambers-basic' ) ); ?></div>
	    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'pdxchambers-basic' ) ); ?></div>
	</nav><!-- end comment-nav -->
	<?php endif; // end Check for comment navigation ?>
	<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.' , 'pdxchambers-basic' ); ?></p>
	<?php endif; ?>
<?php } //end have_comments
	comment_form();	
?>
</div><!-- end comments-wrapper -->