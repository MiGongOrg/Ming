<?php get_header(); 
/**
 * Template Name: Page without sidebar
 *
 * @since Ming 1.0
 *
 */
?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="row">
  <div class="col-xs-12 col-sm-12">
    <!-- 面包屑导航 -->
    <ol class="breadcrumb">
      <li><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></li>
    </ol>
    <!-- 文章内容 -->
    <article>
      <h3><?php the_title(); ?></h3>
      <!-- Post Content -->
      <?php the_content(); ?>
      <!-- Post Content End -->
    </article>
    <hr>
    <!-- 评论 -->
    <?php comments_template(); ?>
    <!-- 评论 End -->
    <?php else : ?>
    <div class="col-xs-12">
      没有找到你想要的页面！
    </div>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>