<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php get_template_part( 'post', 'header' ); ?>

    <?php if ( get_option('onemozilla_share_posts') == 1 ) : ?>
      <div class="share">
        <div class="socialshare" data-type="small-bubbles"></div>
      </div>
    <?php endif; ?>
    <?php edit_post_link( __( 'Edit Post', 'onemozilla' ), '<p class="edit">', '</p>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail', array('alt' => "", 'title' => "")); } ?>
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'onemozilla' ) . '</span>', 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
  <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
    <?php if (has_tag()) : ?>
      <p class="meta"><b><?php _e('Tags','onemozilla'); ?>:</b> <?php $tags_list = the_tags('',', ',''); ?></p>
    <?php endif; ?>
      <p class="meta"><b><?php _e('Categories','onemozilla'); ?>:</b> <?php the_category(', ') ?></p>
  <?php endif; ?>
  </footer><!-- .entry-meta -->
</article><!-- #post -->
