<?php get_header(); ?>
<?php if ( is_active_sidebar( 'primary' ) ) {
	$romangie_left_col_class = "col-md-9 indexpage";
	$romangie_right_col_class= "col-md-3 visible-lg visible-md";
	$romangie_content_class = "col-sm-9 content format-" . get_post_format();
} else {
	$romangie_left_col_class = "col-md-12 indexpage";
	$romangie_right_col_class= "hidden-xs";
	$romangie_content_class = "col-sm-9 col-md-8 content format-" . get_post_format();
}
?>

<div class="row">
  <div class="<?php echo $romangie_left_col_class; ?>">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $romangie_countComments = wp_count_comments(get_the_ID()); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('row post-roll'); ?>>
      <div class="<?php echo $romangie_content_class; ?>">
        <h1 class="entry-title">
          <?php the_title(); ?>
        </h1>
        <div class="entry">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } the_content('Continue Reading <span class="glyphicon glyphicon-chevron-right"></span>'); ?>
        </div>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'romangie' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        
        <div class="col-sm-3 meta info hidden-xs">
          <?php /*?><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( __('Permalink to %s', 'romangie'), get_the_title()); ?>">
								<?php 
								if( has_post_format( ' quote' ) ) {
									echo '<span data-icon="&#x7b;" class="metaicon"></span>';
								} elseif ( has_post_format( 'status' ) ) {
									echo '<span data-icon="&#x6a;" class="metaicon"></span>';
								} elseif ( has_post_format( 'video' ) ) {
									echo '<span data-icon="&#xe024;" class="metaicon"></span>';
								} elseif ( has_post_format( 'audio' ) ) {
									echo '<span data-icon="&#xe069;" class="metaicon"></span>';
								} elseif ( has_post_format( 'chat' ) ) {
									echo '<span data-icon="&#xe066;" class="metaicon"></span>';
								} elseif ( has_post_format( 'image' ) ) {
									echo '<span data-icon="&#xe005;" class="metaicon"></span>';
								} elseif ( has_post_format( 'gallery' ) ) {
									echo '<span data-icon="&#xe006;" class="metaicon"></span>';
								} elseif ( has_post_format( 'link' ) ) {
									echo '<span data-icon="&#xe02b;" class="metaicon"></span>';
								} elseif ( has_post_format( 'aside' ) ) {
									echo '<span data-icon="&#xe057;" class="metaicon"></span>';
								} else {
									echo '<span data-icon="&#xe058;" class="metaicon"></span>';
								}
								?>
							</a><?php */?>
          <hr class="metaline" />
          <div class="additional-meta">
            <div class="line1">
              <div class="meta-item"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><span data-icon="&#xe08a;" class="info-icon"></span>
                <?php the_author(); ?>
                </a></div>
              <div class="meta-item"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( __('Permalink to %s', 'romangie'), get_the_title()); ?>"><span data-icon="&#xe023;" class="info-icon"></span><?php echo get_the_date(); ?></a></div>
              <?php if ( has_category() ) { ?>
              <div class="meta-item">
                <?php _e('<h3>Categories :</h3>', 'romangie' ); ?>
                <?php the_category(); ?>
              </div>
              <?php } ?>
              <div class="meta-item"><a href="<?php the_permalink(); ?>#comments" rel="bookmark" title="<?php _e('Go to comment section', 'romangie'); ?>"><span data-icon="&#xe065;" class="info-icon"></span><?php printf( _n( '%1$s Comment', '%1$s Comments', get_comments_number(), 'romangie' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?></a></div>
            </div>
            <?php if ( has_tag() ) { ?>
            <div class="meta-item">
              <?php _e('<h3>Tags :</h3>', 'romangie' ); the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
            </div>
            <?php } ?>
            <?php edit_post_link(__( 'Edit this entry.', 'romangie') , '<div class="meta-item">', '</div>'); ?>
          </div>
        </div> <!--  end  .hidden-xs -->
        
      </div>
      <div class="comments">
        <?php comments_template( '', true ); ?>
      </div>
      <div id="avantapres"></br></br>
      <div class="left"><?php next_post_link('%link', '&laquo; Article suivant', TRUE); ?></div>
 <div class="right"><?php previous_post_link('%link', 'Article précédent &raquo;', TRUE); ?></div>

 </div>
<?php /*?> <div class="pagenav page-links row">
				<div class="prev-posts pagination-item col-xs-6 col-sm-offset-3 col-sm-4"><?php next_posts_link('&laquo; ' . __('Article précédent', 'romangie') ) ?></div>
				<div class="next-posts pagination-item col-xs-6 col-sm-offset-1 col-sm-4"><?php previous_posts_link( __('Article suivant', 'romangie') . ' &raquo;') ?></div> 
			</div><?php */?>
    </article>
    <!-- end Article -->
    <?php endwhile; ?>
    <?php else : ?>
    <h2>Not Found</h2>
    <?php endif; ?>
  </div>
  <div class="<?php echo $romangie_right_col_class; ?>">
    <?php get_sidebar('primary'); ?>
  </div>
</div>
<?php get_footer(); ?>
