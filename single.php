<?php get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
  <!-- 主体内容 -->
  <div class="row">
    <div class="col-xs-12 col-sm-8">
      <!-- 面包屑导航 -->
      <ol class="breadcrumb">
        <li><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></li>
      </ol>
      <!-- 日期，评论数 -->
      <div class="row">
        <div class="col-xs-6 text-muted">
          <span class="glyphicon glyphicon-time" aria-hidden="true"> </span> <?php the_time('Y-m-d') ?>
        </div>
        <div class="col-xs-6 text-right text-muted">
          <span class="glyphicon glyphicon-comment" aria-hidden="true"> </span> <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论关闭'); ?><?php edit_post_link('EDIT', '  ', ''); ?>
        </div>
      </div>
      <!-- 文章内容 -->
      <article>
          <h3><?php the_title(); ?></h3>
          <!-- Post Content -->
          <?php the_content(); ?>
          <!-- Post Content End -->
      </article>
      <!-- 上一篇 下一篇 -->
      <nav>
        <ul class="pager">
          <li class="previous">
            <?php
              $prev_post = get_previous_post();
              if (!empty( $prev_post )): ?>
                <a title="<?php echo $prev_post->post_title; ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="external nofollow" ><span aria-hidden="true">&larr;</span> Older</a>
            <?php endif; ?>
          </li>
          <li class="next">
            <?php
              $next_post = get_next_post();
              if (!empty( $next_post )): ?>
              <a title="<?php echo $next_post->post_title; ?>" href="<?php echo get_permalink( $next_post->ID ); ?>" rel="external nofollow" >Newer <span aria-hidden="true">&rarr;</span></a>
            <?php endif; ?>
          </li>
        </ul>
      </nav>
      <hr>
      <!-- 分类与标签 -->
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <span class="text-left"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php the_category(); ?> <span class="badge"><?php echo wt_get_category_count(); ?></span></span>
        </div>
        <div class="col-xs-12 col-sm-6 text-right">
          <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> <?php the_tags('<span class="label label-default">', '</span> <span class="label label-default">' , '</span>'); ?>
        </div>
      </div>
      <hr>
      <!-- 相关文章 -->
      <div class="row">
        <!-- 按分类获取相关文章 -->
        <?php
          global $post;
          $cats = wp_get_post_categories($post->ID);
            if ($cats) {
              $args = array(
                'category__in' => array( $cats[0] ),
                'post__not_in' => array( $post->ID ),
                'showposts' => 2,
                'caller_get_posts' => 1
              );
              query_posts($args);

              if (have_posts()) {
                while (have_posts()) {
                  the_post(); update_post_caches($posts); ?>
              <div class="col-xs-12 col-sm-6">
                <a title="<?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>">
                  <!-- thumbnail 获取缩略图360*100 -->
                  <?php the_post_thumbnail('thumbnail'); ?>
                </a>
                <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
              </div>
        <?php
              }
            }
          else {
            echo '<span>* 暂无相关文章</span>';
          }
          wp_reset_query();
          }
          else {
            echo '<span>* 暂无相关文章</span>';
          }
        ?>
      </div>
      <hr>
      <!-- 评论 -->
      <?php comments_template(); ?>
      <!-- 评论 End -->
      <?php else : ?>
      <div class="col-xs-12">
          没有文章！
      </div>
      <?php endif; ?>
      </div>
      <!-- 侧边栏 -->
      <?php get_sidebar(); ?>
      <!-- 侧边栏 End -->
    </div>
<?php get_footer(); ?>