<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<article class="post" id="post-<?php the_ID(); ?>">
		<?php the_post_thumbnail(); ?>
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>
<?php get_footer(); ?>