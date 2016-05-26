<?php get_header(); 
/**
 * Template Name: contract
 *
 * @since Ming 1.0
 *
 */
?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="main_box">
  <div class="content">
    <div class="content_main" style="max-width: 100%;">
      <div class="breadcrumbs">
        <ul>
          <li><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></li>
        </ul>
      </div>
      <h1 class="article_title"><?php the_title(); ?></h1>
      <div class="article_content">
        <article>
          <?php the_content(); ?>
        </article>
      </div>

      <?php else : ?>
      <div class="grid_8">
          没有找到你想要的页面！
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>