<div class="col-xs-12 col-sm-4 hidden-xs">
  <div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#category" aria-controls="category" role="tab" data-toggle="tab">分类</a></li>
      <li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">标签</a></li>
      <li role="presentation"><a href="#archive" aria-controls="archive" role="tab" data-toggle="tab">存档</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active sidebarBorder" id="category" style="padding-top: 0px;">
        <div class="row">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First_sidebar') ) : ?>
              <!-- 分类目录 -->
          <div class="col-xs-12">
            <ul class="list-group">
              <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
            </ul>
          </div>
          <?php endif; ?>
      </div>
      </div>
      <div role="tabpanel" class="tab-pane sidebarBorder" id="tags">
        <div class="row">
          <div class="col-xs-12">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Third_sidebar') ) : ?>
            <!-- 标签云 -->
            <div class="col-xs-12" style="margin-bottom: 20px;">
              <?php wp_tag_cloud('smallest=8&largest=8&number=40'); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane sidebarBorder" id="archive" style="padding-top: 0px;">
        <div class="row">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth_sidebar') ) : ?>                   
          <!-- 文章存档 -->
          <div class="col-xs-12 archive">
            <ul class="list-group">
              <?php wp_get_archives('limit=10'); ?>
            </ul>
          </div>
          <?php endif; ?>
      </div>
      </div>
    </div>
  </div>
  <!-- 最新文章 -->
  <div class="">
    <div class="panel panel-default" id="follow">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second_sidebar') ) : ?>
      <!-- Default panel contents -->
      <div class="panel-heading">最新文章</div>
      <!-- List group -->
      <ul class="list-group">
        <?php
          $posts = get_posts('numberposts=6&orderby=post_date');
          foreach($posts as $post) {
            setup_postdata($post);
            echo '<li class="list-group-item"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
          }
          $post = $posts[0];
        ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
  <!-- 随机文章 -->
  <div class="">
    <div class="panel panel-default" id="follow">
      <div class="panel-heading">随机文章</div>
      <ul class="list-group">
        <?php
          $cat = get_the_category();
          foreach($cat as $key=>$category){
            $catid = $category->term_id;
          }
          $args = array('orderby' => 'rand','showposts' => 4,'cat' => $catid );
          $query_posts = new WP_Query();
          $query_posts->query($args);
          while ($query_posts->have_posts()) : $query_posts->the_post();
        ?>
        <li class="list-group-item">
          <figcaption>
            <p><?php the_title_attribute(); ?></p>
          </figcaption>
            <a title="<?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>">
              <!-- thumbnail 获取缩略图360*100 -->
              <?php the_post_thumbnail('thumbnail'); ?>
            </a>
        </li>
        <?php endwhile;?>
      </ul>
    </div>
  </div>
</div>