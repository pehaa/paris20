<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
	<?php while (have_posts()) : the_post(); ?>
		<article class="post" id="post-<?php the_ID(); ?>">
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h2>
			<p class="meta">Publié le <?php the_time(); ?> par <?php the_author(); ?></p>
			<?php the_post_thumbnail(); ?>
			<?php the_content( 'Lire la suite...' ); ?>
			<p>Publié dans <?php the_category( ', ' ); ?></p>
		</article>
	<?php endwhile; ?>
	<?php next_posts_link(); ?>
	<?php previous_posts_link(); ?>
<?php else : ?>
	<h2>Aucun résultat.</h2>
<?php endif; ?>
<?php get_footer(); ?>