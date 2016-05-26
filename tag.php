<?php get_header(); 
/**
 * Template Name: 标签页面
 *
 * @since Ming 1.0
 *
 */
?>

<div class="row">
  <div class="col-xs-12">
    <div class="page-header">
      <h2 class="tags_title"><?php printf( __( '%s', 'migong' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
    </div>
  </div>
  <!-- tag 文章循环 -->
  <?php get_template_part( 'loop', 'tag' ); ?>
  <!-- 底部分页 -->
</div>
<?php pagination($query_string); ?>
<?php get_footer(); ?>