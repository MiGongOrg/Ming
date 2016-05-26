<?php 
  if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die ('Please do not load this page directly. Thanks!');
?>
<!--以上comments头部代码是为了安全起见，不让恶意用户直接打开评论文件-->
<div class="row">
  <div class="col-xs-12">
    <ol class="comment_list_ol">
      <?php
        if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
        // if there's a password
        // and it doesn't match the cookie
      ?>
      <li class="decmt-box">
          <p><a href="#addcomment">请输入密码再查看评论内容.</a></p>
      </li>
      <?php
          } else if ( !comments_open() ) {
      ?>
      <li class="decmt-box">
        <p><a href="#addcomment">评论功能已经关闭!</a></p>
      </li>
      <?php
        } else if ( !have_comments() ) {
      ?>
      <li class="decmt-box">
        <p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p>
      </li>
      <?php
        } else {
          wp_list_comments('type=comment&callback=aurelius_comment&avatar_size=27');
        }
      ?>
    </ol>
  </div>
  <?php
    if ( !comments_open() ) :
    // If registration required and not logged in.
    elseif ( get_option('comment_registration') && !is_user_logged_in() ) :
  ?>
  <p>你必须 <a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a> 才能发表评论.</p>
  <?php else  : ?>
</div>
<hr class="mtb">
<div class="row">
  <form id="commentform" name="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
    <?php if ( !is_user_logged_in() ) : ?>
    <div class="col-xs-12 col-sm-4">
      <div class="input-group">
        <span class="input-group-addon" id="author-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
        <input type="text" name="author" id="author" class="form-control" value="<?php echo $comment_author; ?>" placeholder="Name" aria-describedby="author-addon"/>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="input-group">
        <span class="input-group-addon" id="email-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
        <input type="text" name="email" id="email" class="form-control" value="<?php echo $comment_author_email; ?>" placeholder="Email" aria-describedby="email-addon"/>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="input-group">
          <span class="input-group-addon" id="url-addon"><span class="glyphicon glyphicon-link" aria-hidden="true"></span></span>
          <input type="text" name="url" id="url" class="form-control" value="<?php echo $comment_author_url; ?>" placeholder="WebSite" aria-describedby="url-addon"/>
        </div>
    </div>
    <?php else : ?>
    <div class="col-xs-12">
      <p class="commentLoginUser">
        您已登录:<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出登录">退出 &raquo;</a>
      </p>
    </div>
    <?php endif; ?>
    <div class="col-xs-12">
      <div class="form-group">
        <textarea name="comment" id="comment" cols="30" rows="3" class="form-control" placeholder="请尽量回复对读者有价值的内容！"></textarea>
      </div>
    </div>
    <!-- Add Comment Button -->
    <div class="col-xs-12">
        <a href="javascript:void(0);" onClick="Javascript:document.forms['commentform'].submit()" class="btn btn-default btn-block">发表评论</a>
    </div>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  <?php endif; ?>
</div>