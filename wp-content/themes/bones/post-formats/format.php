
  <?php
    /*
     * This is the default post format.
     *
     * So basically this is a regular post. if you don't want to use post formats,
     * you can just copy ths stuff in here and replace the post format thing in
     * single.php.
     *
     * The other formats are SUPER basic so you can style them as you like.
     *
     * Again, If you want to remove post formats, just delete the post-formats
     * folder and replace the function below with the contents of the "format.php" file.
    */
  ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class('m-all t-all d-5of7'); ?> role="article">

    <div class="article-header entry-header">
      <h2 class="entry-title single-title" rel="bookmark"><?php the_title(); ?></h2>

      <p class="byline entry-meta vcard">

        <?php printf( __( 'Posted %1$s', 'bonestheme' ),
           /* the time the post was published */
           '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
           /* the author of the post */
           '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
        ); ?>

      </p>

    </div> <?php // end article header ?>

    <section class="entry-content">
      <?php
        // the content (pretty self explanatory huh)
        the_content();
      ?>
    </section> <?php // end article section ?>

  </article> <?php // end article ?>

  <?php get_sidebar(); ?>
