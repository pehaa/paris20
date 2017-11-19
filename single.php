<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<article class="post" id="post-<?php the_ID(); ?>">
		<?php the_post_thumbnail(); ?>
		<h1 class="post-title">
			<?php the_title(); ?>
		</h1>
		<p class="meta">Publié le <?php the_time(); ?> par <?php the_author(); ?></p>
		<?php the_content(); ?>
		<p>Publié dans <?php the_category( ', ' ); ?></p>
		<p><?php the_tags(); ?></p>
		<?php the_post_navigation(); ?>
	</article>
<?php endwhile; ?>
<?php get_footer(); ?>