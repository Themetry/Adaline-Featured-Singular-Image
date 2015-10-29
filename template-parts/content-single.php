<?php
/**
 * Template part for displaying single posts.
 *
 * @package Adaline Featured Singular Image
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail( 'singular-image' ); ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-wrap">
		<div class="entry-meta">
			<div class="post-author">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '70' ); ?>
				<?php adaline_byline(); ?>
			</div>
			<?php adaline_posted_on(); ?>
			<?php adaline_filed_under(); ?>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'adaline' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .entry-wrap -->

	<footer class="entry-footer">
		<?php adaline_entry_footer(); ?>
		<?php adaline_post_navigation(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
