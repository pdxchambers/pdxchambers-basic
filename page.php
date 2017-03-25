<?php
/**
 * The page template
 *
 * @subpackage pdxchambers-basic
 * @since PDXChambers Basic 1.0
 */
 get_header();
?>
<div id="site-content">
	<div id="post-wrapper">
<?php
    	if(have_posts()){
    		while(have_posts()) {
    			the_post();
    ?>
     <article <?php post_class('post-content'); ?>>
     	<header class="post-header">
     		<?php
     			if ( has_post_thumbnail() ) {
	            	the_post_thumbnail();
	            } else {
	            	/*placeholder for something to do if no post_thumbnail*/
	            }//end if/else
	         ?>
     		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
     	</header><!-- end post-header -->
     	<section>
     		<?php the_content(); ?>
     	</section>
     </article>
     <?php
     wp_link_pages();
     		} //endwhile
    	} //endif

    	the_posts_pagination( array(
    			'prev_text'          => __( 'Next', 'pdxchambers-basic' ),
    			'next_text'          => __( 'Prev', 'pdxchambers-basic' )
    	) );
    	if ( comments_open() || get_comments_number() ) {
    		comments_template();
    	}
     ?>
   </div><!-- end Post-Wrapper -->
   <?php get_sidebar(); ?>
</div><!-- Site Content -->
<?php
	get_footer();
?>
