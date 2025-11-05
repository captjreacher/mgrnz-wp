<?php get_header(); ?>

<main class="mgrnz-main" style="max-width:1100px;margin:2rem auto;padding:0 1rem;display:grid;grid-template-columns:1fr 320px;gap:2rem;">
  <section class="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?> style="margin-bottom:2rem;">
        <h2 style="margin:0 0 .5rem;"><a href="<?php the_permalink(); ?>" style="color:#ff4f00;text-decoration:none;"><?php the_title(); ?></a></h2>
        <div style="color:#bbb;font-size:.95rem;margin-bottom:.75rem;">
          <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
          · by <?php the_author_posts_link(); ?>
        </div>
        <div class="entry-excerpt" style="color:#e7e7e7;"><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; else: ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </section>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
