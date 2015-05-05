<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php get_template_part( 'post', 'header' ); ?>
  </header>

  <div class="entry-content">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail', array('alt' => "", 'title' => "")); } ?>

    <?php the_content( __( 'Continue reading &hellip;', 'onemozilla' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<p class="pages" role="navigation"><span>' . __( 'Pages:', 'onemozilla' ) . '</span>', 'after' => '</p>' ) ); ?>
  </div><!-- .entry-content -->

  <?php edit_post_link( __( 'Edit Post', 'onemozilla' ), '<p class="edit">', '</p>' ); ?>

  <?php if ( has_tag() || ( 'post' == get_post_type() ) ) : // No need for a footer if there's nothing to show ?>
    <footer class="entry-meta">
    <?php if (has_tag()) : ?>
      <p class="meta"><b><?php _e('Tags','onemozilla'); ?>:</b> <?php $tags_list = the_tags('',', ',''); ?></p>
    <?php endif; ?>
      <p class="meta"><b><?php _e('Categories','onemozilla'); ?>:</b> <?php the_category(', ') ?></p>
    </footer>
  <?php endif; ?>
  <?php $comment_count = get_comments_number($post->ID);
    if ( comments_open() || pings_open() || ($comment_count > 0) ) : ?>
      <p class="entry-comments-num">
        <a href="<?php comments_link() ?>" title="<?php if($comment_count > 0) { printf(_n( '1 response', '%d responses', $comment_count, 'onemozilla'), $comment_count); } else { _e('No responses yet'); } ?>"><?php if ($comment_count > 999) : comments_number('0','1','1000+'); else : comments_number('0','1','%'); endif; ?>
          comment<?php if ( ($comment_count > 1) ) : ?>s<?php endif; ?>
        </a>
      </p>
  <?php endif; ?>

</article><!-- #post -->
