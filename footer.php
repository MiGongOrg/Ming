    <!-- Footer -->
    <footer>
        <hr>
        <p>Copyright &copy; 2015 Design &amp; Coding <span class="glyphicon glyphicon-paperclip" style="top: 3px;"></span> <a href="http://www.migong.org">Ming.</a></p>
    </footer>
  </div>
  <div id="frame" style="display:none"><a id="phoneIframe" src="http://demo.migong.org/me/"><span id="refreshBtn"></span></a></div>
  <!-- Back To Top -->
  <span id="BackToTop" class="btn BackTop fr" data-toggle="tooltip" data-placement="bottom" title="Top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></span>
  <!-- About Me -->
  <?php get_template_part('about'); ?>
  <!-- 占位符特效 Js -->
  <script src="<?php bloginfo('template_directory'); ?>/js/placeholdem.min.js"></script>
  <!-- Ming 自定义 Js -->
  <script src="<?php bloginfo('template_directory'); ?>/js/ming.js"></script>
  <!-- robot Js -->
  <script src="<?php bloginfo('template_directory'); ?>/js/robot.js"></script>
  <?php wp_footer(); ?>
  </body>
</html>