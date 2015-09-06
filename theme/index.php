<?php get_header(); ?>

    <main class="col-md-9">
    <?php while ( have_posts() ) : the_post(); ?>

      <article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
        <header>
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <span>Posted on <time datetime="<?php the_date();?>"><?php the_date();?> at <?php the_time();?></time> by <?php the_author();?></span>
        </header>
        <figure>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full-thumbnail', array( 'class' => 'thumbnail' ) ); ?></a>
        </figure>
        <?php the_content(); ?>

      </article> 

      <?php endwhile; ?>

      <nav>
        <ul class="pagination">
          <li>
            <a href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>