<?php get_header(); 
/**
 * Template Name: index
 *
 * @since Ming 1.0
 *
 */
?>
<!-- 主体内容 -->
<div class="row">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="col-xs-12 col-sm-6">
    <div class="thumbnail">
      <!-- 文章图片 -->
      <a title="<?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
      <div class="caption">
        <!-- 文章标题 -->
        <h3>
          <a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php
              $title = get_the_title();
              $trimmed_title = wp_trim_words( $title, 20);
              echo $trimmed_title;
            ?>
          </a>
          <small><?php the_category(); ?></small>
        </h3>
        <!-- 文章描述 -->
        <p>
          <?php
            $content = get_the_content();
            $trimmed_content = wp_trim_words( $content, 32, '<a href="'. get_permalink() .'"> ...More</a>' );
            echo $trimmed_content;
          ?>
        </p>
        <!-- 文章分类 -->
        <span><?php the_category(); ?> <span class="badge"><?php echo wt_get_category_count(); ?></span></span>
        <!-- 文章标签 -->
        <?php the_tags('<span class="label label-default tagsColor">', '</span> <span class="label label-default tagsColor">' , '</span>'); ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php else : ?>
  <h3 class=""><a href="#" rel="bookmark">未找到</a></h3>
  <p>没有找到任何文章！</p>
  <?php endif; ?>
</div>
<!-- 主体内容 End -->
<!-- 分页导航 -->
<?php pagination($query_string); ?>
<?php get_footer(); ?>