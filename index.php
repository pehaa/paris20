<!DOCTYPE html>
<html>
<head>
  <title>Titre du site | Titre de la page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>
<header id="masthead" class="site-header" role="banner">
	<h1 class="site-title">Le titre de notre site</h1>
	<p>Le slogan de notre site</p>
</header>
<main class="site-content" id="#content" role="main">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="post" id="post-<?php the_ID(); ?>">
      <h2>
        <a href="<?php the_permalink(); ?>" rel="bookmark">
          <?php the_title(); ?>
        </a>
      </h2>
      <p class="meta">Publié le <?php the_time(); ?> par <?php the_author(); ?></p>
      <?php the_post_thumbnail(); ?>
      <?php the_content( 'Lire la suite...' ); ?>
      <p>Publié dans <?php the_category(); ?></p>
    </article>
  <?php endwhile; ?>
  <?php next_posts_link(); ?>
  <?php previous_posts_link(); ?>
<?php else : ?>
  <h2>Aucun résultat.</h2>
<?php endif; ?>
</main>
<footer>
  Titre du site. © 2017
</footer>
<?php wp_footer(); ?>
</body>
</html>