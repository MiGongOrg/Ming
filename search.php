<?php get_header(); 
/**
 * Template Name: 搜索页面
 *
 * @since MiGong 1.0
 *
 */
?>

<div class="row">
  <?php if ( have_posts() ) : ?>
    <div class="col-xs-12">
      <div class="page-header">
        <h2 class="category_title"><?php printf( __( '%s', 'migong' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
      </div>
    </div>
    <div class="">
      <?php get_template_part( 'loop', 'search' ); ?>
    </div>
  <?php else : ?>
    <div class="col-xs-12">
      <div class="jumbotron">
        <p class="h1">404</p>
        <p>
          <?php printf( __( '未找到 "%s" 关键字的相关搜索结果', 'migong' ), '<span>' . get_search_query() . '</span>' ); ?>
        </p>
        <p><a class="btn btn-primary btn-lg" href="<?php echo get_option('home'); ?>" role="button">返回首页</a></p>
      </div>
    </div>
  <?php endif; ?>
  <div class="col-xs-12">
    <?php pagination($query_string); ?>
  </div>
</div>
<?php get_footer(); ?>