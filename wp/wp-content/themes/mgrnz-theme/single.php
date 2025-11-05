<?php get_header(); ?>

<main class="mgrnz-main" style="max-width:1100px;margin:2rem auto;padding:0 1rem;display:grid;grid-template-columns:1fr 320px;gap:2rem;">
  <section class="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?> style="margin-bottom:2rem;">
        <header style="margin-bottom:1rem;">
          <h1 style="color:#fff;margin:0 0 .5rem 0;"><?php the_title(); ?></h1>
          <div style="color:#bbb;font-size:.95rem;">
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
            · by <?php the_author_posts_link(); ?>
            <?php if ( get_the_category() ) : ?> · <?php the_category( ', ' ); ?><?php endif; ?>
          </div>
        </header>

        <?php if ( has_post_thumbnail() ) : ?>
          <figure style="margin:0 0 1rem 0;">
            <?php the_post_thumbnail( 'large', ['style' => 'width:100%;height:auto;border-radius:12px;display:block;object-fit:cover;'] ); ?>
          </figure>
        <?php endif; ?>

        <div class="entry-content" style="color:#e7e7e7;line-height:1.7;">
          <?php the_content(); ?>
        </div>

        <footer style="margin-top:2rem;color:#bbb;">
          <?php the_tags( '<p>Tags: ', ', ', '</p>' ); ?>
        </footer>

        <nav class="post-nav" style="display:flex;justify-content:space-between;margin-top:2rem;">
          <div class="prev"><?php previous_post_link( '%link', '← %title' ); ?></div>
          <div class="next"><?php next_post_link( '%link', '%title →' ); ?></div>
        </nav>

        <?php if ( comments_open() || get_comments_number() ) : ?>
          <section class="comments" style="margin-top:2rem;">
            <?php comments_template(); ?>
          </section>
        <?php endif; ?>
      </article>
    <?php endwhile; endif; ?>
  </section>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
