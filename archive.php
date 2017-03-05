<?php
/**
 * The archive template
 *
 * @package WordPress
 * @subpackage pdxchambers-basic
 * @since PDXChambers Basic 1.0
 */
 get_header();
?>
<div id="site-content">
	<div id="post-wrapper">
		<div class="archive-title">
		<?php
			the_archive_title( '<h1>', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
		</div>
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
     		<div class="byline">
	     		<h3 class="author">By <?php the_author() ?></h3>
	     		<p class="post-date"><?php the_time( 'l, F jS, Y' ); ?></p>
     		</div>
     	</header><!-- end post-header -->
     	<section>
     		<?php the_excerpt(); ?>
     	</section>
     	<div class="post-meta">
	     	<p class="post-categories">Category: <?php the_category( ', ' ); ?>.</p>
	     	<p class="post-tags"><?php the_tags( 'Tagged in: '); ?></p>
     	</div>
     </article>
     <?php
     		} //endwhile
    	} //endif

    	the_posts_pagination( array(
    			'prev_text'          => __( 'Next', 'pdxchambers-basic' ),
    			'next_text'          => __( 'Prev', 'pdxchambers-basic' )
    	) );
     ?>
     </div><!-- end Post-Wrapper -->
     <?php
    	get_sidebar();
     ?>
</div><!-- Site Content -->

<?php
	get_footer();
?>
