<?php 
/**
 * 主循环程序文件是用于项目显示的，例如文章，分类，标签，归档乃至是搜索结果。
 *
 * @since MiGong 1.0
 *
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $Imagesurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())) ? wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())):get_template_directory_uri().'/avatar.jpg'; ?>
  <div class="col-xs-12 col-sm-6">
    <div class="thumbnail">
      <!-- 文章图片 -->
      <a title="<?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
      <div class="caption">
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
        <p>
          <!-- Post Content -->
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
<?php endwhile; // End the loop. Whew. ?>