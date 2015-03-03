<?php if ( 'post' == get_post_type() ) : // No posted date for Pages ?>
  <p class="entry-posted">
    <time class="published" title="<?php the_time('Y-m-d\TH:i:sP'); ?>" datetime="<?php the_time('Y-m-d\TH:i:sP'); ?>">
      <a class="posted-month" href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>" title="<?php printf( __( 'See all posts from %s', 'onemozilla' ), get_the_time('F, Y') ); ?>"><?php strftime(the_time('M')); ?></a>
      <span class="posted-date"><?php the_time('j'); ?></span>
      <a class="posted-year" href="<?php echo get_year_link(get_the_time('Y'), get_the_time('y')); ?>" title="<?php printf( __( 'See all posts from %s', 'onemozilla' ), get_the_time('Y') ); ?>"><?php the_time('Y'); ?></a>
    </time>
  </p>
<?php endif; ?>
<div class="entry-header-title-author">
  <h2 class="entry-title">
    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permanent link to &ldquo;%s&rdquo;', 'onemozilla' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php esc_attr(the_title()); ?></a>
  </h2>
  <?php if ( get_option('onemozilla_hide_authors') != 1 ) : ?>
    <cite class="author fn">By <a class="url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>" title="<?php printf( esc_attr__( 'See all %1$s posts by %2$s', 'onemozilla'), get_the_author_posts(), get_the_author() ); ?>"><?php esc_html(the_author()); ?></a></cite>
  <?php endif; ?>
</div>
