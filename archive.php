<?php get_header(); 
/**
 * Template Name: 归档页面
 *
 * @since Ming 1.0
 *
 */
?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="row">
  <div class="col-xs-12">
    <!-- 面包屑导航 -->
    <ol class="breadcrumb">
      <li><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></li>
    </ol>
    <div class="col-xs-12">
      <article>
        <?php zww_archives_list(); ?>
      </article>
    </div>
    <?php comments_template(); ?>
    <?php else : ?>
      <p>没有找到你想要的页面！</p>
    <?php endif; ?>
  </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function($){
    //存档页面 jQ 伸缩
    (function(){
      $('#al_expand_collapse,#archives span.al_mon').css({cursor:"s-resize"});
      $('#archives span.al_mon').each(function(){
        var 
        num  = $(this).next().children('li').size(),
        text = $(this).text();
        $(this).html(text+'<em> ( '+num+' 篇文章 )</em>');
      });
      var 
      $al_post_list   = $('#archives ul.al_post_list'),
      $al_post_list_f = $('#archives ul.al_post_list:first');
      $al_post_list.hide(1,function(){
          $al_post_list_f.show();
      });
      $('#archives span.al_mon').click(function(){
        $(this).next().slideToggle(400);
        return false;
      });
      $('#al_expand_collapse').toggle(function(){
        $al_post_list.show();
      },
      function(){
        $al_post_list.hide();
      });
    })();
  });
</script>
<?php get_footer(); ?>