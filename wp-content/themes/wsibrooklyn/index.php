<?php get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

		<article>

			<time pubdate><?php echo get_the_date( 'j F Y' ); ?></time>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

			<h3><meta name="author">By <?php the_author();  ?></meta><br />
			<?php echo comments_popup_link( 'No Comments', '1 Comment', '% Comments' ); ?><br />
			<?php the_tags( 'Tagged with ', ', ' ); ?></h3>

		</article>

	<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>