<div class="modal fade" role="dialog" id="about" aria-labelledby="aboutme">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="aboutme">About Me</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
              <address class="text-muted">
                <strong><a href="http://demo.migong.org/about/" rel="nofollow" target="_blank">Ming.</a></strong>
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> In Xiamen China
                <blockquote class="blockquote-reverse">
                坚持一件你认为有价值的事情！ <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                <footer>From <cite title="Source Title">V2EX</cite></footer>
                </blockquote>
              </address>
              <!--对话内容-->
              <ul id="chatContent" style="padding-left: 0px;">
                <li class="me"><span class="glyphicon glyphicon-user meImg" aria-hidden="true"></span><span class="meContent">你好啊~</span></li>
                <li class="robot"><span class="glyphicon glyphicon-baby-formula robotImg" aria-hidden="true"></span><span class="robotContent">主人您好！请叫我小奶瓶。</span></li>
              </ul>
              <div id="chatContentFootDiv"> </div>
              <div style="clear: both;"> </div>
              <!--对话内容 End-->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- 聊天输入框 -->
        <div class="input-group" style="float: left;">
          <span class="input-group-btn">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          </span>
          <input type="text" class="form-control" id="inputText" name="subject" placeholder="对小奶瓶说点什么…(表情暗号：输入mg0至mg123有惊喜！)">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="sendButton" onclick="sendMessage()">发送</button>
          </span>
        </div>
        <!-- 聊天输入框 End-->
        <!-- 机器人表情 -->
        <div class="col-xs-12 text-center" id="biaoqing">
          <div class="col-xs-2"><img src="http://www.migong.org/wp-content/themes/ming/images/robotSmiles/22.gif" alt="mg22"></div>
          <div class="col-xs-2"><img src="http://www.migong.org/wp-content/themes/ming/images/robotSmiles/30.gif" alt="mg30"></div>
          <div class="col-xs-2"><img src="http://www.migong.org/wp-content/themes/ming/images/robotSmiles/41.gif" alt="mg41"></div>
          <div class="col-xs-2"><img src="http://www.migong.org/wp-content/themes/ming/images/robotSmiles/49.gif" alt="mg49"></div>
          <div class="col-xs-2"><img src="http://www.migong.org/wp-content/themes/ming/images/robotSmiles/67.gif" alt="mg67"></div>
          <div class="col-xs-2"><img src="http://www.migong.org/wp-content/themes/ming/images/robotSmiles/90.gif" alt="mg90"></div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->