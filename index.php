<?php get_header(); ?>
      <section class="two-column">
        <div class="wrapper content">
        <?php get_sidebar(); ?>
          <section class="primary">
            <?php while(have_posts()): the_post(); ?>
            <article>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <?php the_content(); ?>
            </article>
            <?php endwhile; ?>
          </section><!-- /.primary -->
        </div><!-- /.wrapper -->
      </section><!-- /.two-column -->
      <?php get_footer(); ?>