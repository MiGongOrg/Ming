<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <!-- IE 兼容模式 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 国内浏览器 IE 内核高速模式渲染，目前只有360浏览器支持 -->
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述4个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title><?php if ( is_home() ) {
    bloginfo('name'); echo " - "; bloginfo('description');
  } elseif ( is_category() ) {
    single_cat_title(); echo " - "; bloginfo('name');
  } elseif ( is_tag() ) {
    single_cat_title(); echo " - "; bloginfo('name');
  }elseif (is_single() || is_page() ) {
    single_post_title(); echo " - "; bloginfo('name');
  } elseif (is_search() ) {
    echo "搜索结果"; echo " - "; bloginfo('name');
  } elseif (is_404() ) {
    echo '页面未找到!'; echo " - "; bloginfo('name');
  } else {
    wp_title('',true);
  } ?></title>
  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="http://ajax.useso.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver=3.4.2"></script>
  <!-- Bootstrap 核心 JavaScript 文件 -->
  <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
  <?php wp_head(); ?>
  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?3e9e05c95125cd0a05f2ee574f23771a";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
</head>
<!--刷新缓存,用于提高程序运行效率-->
<?php flush(); ?>
<body>
  <div class="container">
    <!-- 顶部导航 -->
    <div class="row">
      <div class="col-xs-12">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only" style="position: absolute;">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!-- 菜单 -->
              <ul class="nav navbar-nav">
                <?php
                  // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
                  wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 1) );
                ?>
              </ul>
              <!-- 搜索 -->
              <form class="navbar-form navbar-left" role="search" name="formsearch" method="get" action="<?php bloginfo('home'); ?>">
                <div class="form-group">
                  <input type="text" name="s" class="form-control" id="search" placeholder="Search" onfocus="if (this.value == '') {this.value = '';}" onblur="if (this.value == '') {this.value = '';}">
                  <div class="form-group" style="text-align: center;vertical-align: baseline;">
                    <a class="search-icon">
                      <span class="circle"></span>
                      <span class="handle"></span>
                    </a>
                  </div>
                </div>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <!-- about me -->
                <li>
                  <div class="col-xs-12 text-center">
                    <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#about">About Me</button>
                  </div>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>
    <!-- 顶部导航 End -->