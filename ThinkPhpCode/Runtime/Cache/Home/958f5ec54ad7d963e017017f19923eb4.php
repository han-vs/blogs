<?php if (!defined('THINK_PATH')) exit();?>
    <!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/dedicine/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/pc/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/pc/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/pc/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/pc/css/animate.css">
    <link rel="shortcut icon" href="http://thinkphp.com/Public/dedicine/images/favicon.ico">
    <script src="http://thinkphp.com/Public/dedicine/js/jquery-2.1.4.min.js"></script>
    <script src="http://thinkphp.com/Public/pc/js/nprogress.js"></script>
    <script src="http://thinkphp.com/Public/pc/js/jquery.lazyload.min.js"></script>
    <!--[if gte IE 9]>
    <script src="http://thinkphp.com/Public/dedicine/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/respond.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->

<title><?php echo ($res["name"]); ?>-文章列表-单调的季节</title>
</head>
<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu">
                    <li class="animated fadeInLeftBig">今天的感悟是明天的成就，</li>
                    <li class="animated fadeInLeftBig">坦然面对生活即是对未来的承诺—</li>
                    <li class="animated fadeInLeftBig">
                        hanvs
                    </li>
                </ul>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#header-navbar" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <h1 class="logo hvr-bounce-in">
                    <a href="" title="单调的季节">
                        <img src="http://thinkphp.com/Public/pc/images/icon.png" class="animated flip" alt="单调的季节">
                    </a>
                </h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20"
                               autocomplete="off">
                        <span class="input-group-btn">
                <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navMuns navbar-right animated fadeInDownBig">
                    <li><a data-cont="单调的季节" href="http://thinkphp.com/index.php">首页</a></li>
                    <li class="selected"><a data-cont="笔记" href="http://thinkphp.com/index.php/Note/">笔记</a></li>
                    <li><a data-cont="日志" href="">日志</a></li>
                    <li><a data-cont="相册" href="">相册</a></li>
                    <li><a data-cont="回忆录" href="">回忆录</a></li>
                    <li><a data-cont="时光轴" href="">时光轴</a></li>
                    <li><a data-cont="音悦盒" href="">音悦盒</a></li>
                    <li><a data-cont="留言板" href="">留言板</a></li>
                    <li><a data-cont="工具箱" href="">工具箱</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <header class="article-header">
                <h1 class="article-title">
                    <a href="http://thinkphp.com/index.php/Note/article.html?class=<?= base64_encode($res['type'])?>&name=<?= base64_encode($res['name']) ?>"
                       title="<?php echo ($res["name"]); ?>"><?php echo ($res["name"]); ?></a>
                </h1>
                <div class="article-meta">
            <span class="item article-meta-time">
          <time class="time" data-toggle="tooltip" data-placement="bottom" title="发表时间"
                data-original-title="发表时间：<?php echo ($res["date"]); ?>">
              <i class="glyphicon glyphicon-time"></i> <?= date('Y-m-d H:i:s',$res['date'])?>
          </time>
          </span>
                    <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title=""
                          data-original-title="来源：单调的季节">
                        <i class="glyphicon glyphicon-globe"></i> 单调的季节
                    </span>
                    <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title=""
                          data-original-title="<?php echo ($res["type"]); ?>">
                        <i class="glyphicon glyphicon-list"></i>
                        <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode($res['type'])?>" title="PHP"><?php echo ($res["type"]); ?></a>
                    </span>
                    <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title=""
                          data-original-title="浏览量：<?php echo ($res["view"]); ?>">
                        <i class="glyphicon glyphicon-eye-open"></i> <?php echo ($res["view"]); ?>
                    </span>

                <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title=""
                      data-original-title="评论量">
                   <a href="#comment_list">
                       <i class="glyphicon glyphicon-comment"></i> <?= count($discuss)-1?>
                   </a>
                </span>

                </div>
            </header>
            <article class="article-content">
                <p>
                    <img data-original="http://thinkphp.com/Public/dedicine/images/sort/img-<?php echo ($title); ?>.jpg"
                         src="http://thinkphp.com/Public/dedicine/images/sort/img-<?php echo ($res["type"]); ?>.jpg" alt=""/></p>
                <p>
                    <?php echo ($res["explain"]); ?>
                <pre class="prettyprint lang-cs" style="background-color: rgb(217,216,216)"> 代码：<br>
                    <?php echo ($res["content"]); ?>
                <br>
                </pre>
                <div class="bdsharebuttonbox"></div>

            </article>
            <br><br>
            <div class="relates">
                <div class="title">
                    <h3>相关推荐</h3>
                </div>
                <ul>
                    <?php if(is_array($recommend)): foreach($recommend as $key=>$v): ?><li>
                            <a href="http://thinkphp.com/index.php/Note/article.html?class=<?= base64_encode($res['type']) ?>&name=<?= base64_encode($v['name']) ?>"
                               title=""><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="title" id="comment">
                <h3>评论</h3>
            </div>
            <div id="respond">
                <form id="comment-form" name="comment-form" action="http://thinkphp.com/index.php/Note/discuss.html" method="POST">
                    <div class="comment">
                        <input name="nickname" class="form-control" size="22" placeholder="您的昵称（必填）" maxlength="8"
                               autocomplete="off" tabindex="1" type="text">
                        <input name="contact" class="form-control" size="22" placeholder="您的网址或邮箱（非必填）" maxlength="58"
                               autocomplete="off" tabindex="2" type="text">
                        <div class="comment-box">
                            <textarea placeholder="您的评论或留言（必填）" name="comment-textarea" id="comment-textarea"
                                      cols="100%" rows="3" tabindex="3" maxlength="100"></textarea>
                            <div class="comment-ctrl">
                                <div class="comment-prompt" style="display: none;">
                                    <i class="fa fa-spin fa-circle-o-notch"></i>
                                    <span class="comment-prompt-text">评论正在提交中...请稍后</span>
                                </div>
                                <div class="comment-success" style="display: none;">
                                    <i class="fa fa-check"></i>
                                    <span class="comment-prompt-text">评论提交成功,等待审核...</span>
                                </div>
                                <button type="submit" id="comment-submit" tabindex="4">评论</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!--评论 -->
            <div id="postcomments">
                <ol id="comment_list" class="commentlist">
                    <?php
 $i=count($discuss)-1; unset($discuss['count']); ?>
                    <?php if(is_array($discuss)): foreach($discuss as $key=>$v): ?><li class="comment-content">

                            <span class="comment-f">#<?php echo ($i--); ?></span>
                            <div class="comment-main">
                                <p>
                                    <a class="address" href="javascript:void(0);" rel="nofollow" target="_blank"><?php echo ($v["name"]); ?></a>
                                    <span class="time">(<?= date('Y-m-d H:i:s',$v['date']) ?>)：</span><br>
                                    &nbsp;&nbsp;&nbsp;<?php echo ($v["content"]); ?>
                                </p>
                            </div>
                        </li><?php endforeach; endif; ?>
                </ol>
            </div>
            <!--评论结束-->
        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab"
                                                              data-toggle="tab">访客信息</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab"
                                               data-toggle="tab">您的位置</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane contact active" id="notice">
                        <h2>
                            已有<label style="color:#5CC868"><?php echo ($userMess["count"]); ?></label>人访问
                        </h2>
                        <h2>您是第:
                            <span id="sitetime" style="color:#5CC868"><?php echo ($userMess["some"]); ?></span>
                            位
                        </h2>
                    </div>
                    <div role="tabpanel" class="tab-pane contact" id="contact">
                        <h2>IP：
                            <a href="javascript:void(0)" data-toggle="tooltip" rel="nofollow"
                               data-placement="bottom" title="" data-original-title="IP"><?php echo ($userMess["ip"]); ?></a>
                        </h2>
                        <h2>所在地：
                            <a href="javascript:void(0)" rel="nofollow" data-toggle="tooltip" data-placement="bottom"
                               data-original-title="您的位置"><?php echo ($userMess["city"]); ?></a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="widget widget_search">
                <form class="navbar-form" action="" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入文章关键字"
                               maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget widget_sentence">
            <h3>手册文档</h3>
            <div class="widget-sentence-link">
                <a href="" title="" target="_blank">HTML</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" title="" target="_blank">CSS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" title="" target="_blank">javaScript</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" title="" target="_blank">PHP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" title="" target="_blank">更多</a>
            </div>

        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>
                <li>
                    <a title="" href="">
                        <span class="thumbnail">
                            <img class="thumb" data-original="http://thinkphp.com/Public/pc/images/icon.png"
                                 src="http://thinkphp.com/Public/pc/images/icon.png"
                                 style="display: block;">
                        </span>
                        <span class="text">标题标题标题</span>
                        <span class="muted">
                                <i class="glyphicon glyphicon-time"></i>
                            2016-11-01
                        </span>
                        <span class="muted">
                                <i class="glyphicon glyphicon-eye-open"></i>
                                88
                            </span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>
</section>
<script type="text/javascript">
    var arrVal = ['undefined', '', 'null'];
    /*评论提交事件*/
    $('#comment-submit').click(function () {
        $('.comment-success').css('display', 'none');
        var nick = $('input[name=nickname]');
        var textarea = $('textarea[name=comment-textarea]');
        var flag = true;
        if ($.inArray(nick.val().toString(), arrVal) != -1) {
            nick.css('border', 'solid 2px red');
            flag = false;
        } else {
            nick.css('border', 'solid 2px #ccc');
        }
        if ($.inArray(textarea.val().toString(), arrVal) != -1) {
            $('.comment-box').css('border', 'solid 2px red');
            $('#comment-submit').css('border-right', 'solid 2px red').css('border-bottom', 'solid 2px red');
            flag = false;
        } else {
            $('.comment-box').css('border', 'solid 2px #ccc');
            $('#comment-submit').css('border-right', 'solid 2px #ccc').css('border-bottom', 'solid 2px #ccc');
        }
        if (flag) {
            $('.comment-prompt').css('display', 'block');
            $.post('http://thinkphp.com/index.php/Note/discuss.html', {
                'name': nick.val(),
                'contact': $('input[name=contact]').val(),
                'content': textarea.val(),
                'textType': '<?php echo ($res["type"]); ?>',
                'textName': '<?php echo ($res["name"]); ?>'
            }, function (result) {
                noteEvent(result, nick, textarea);
            });
        }
        return false;
    });
    $(function(){share();});
</script>


    <footer class="footer">
    <div class="container">
        <p>
            Copyright &copy;2016 www.hanvs.cn, All Rights Reserved 京ICP备16049442号-1  <a href="http://thinkphp.com/index.php">单调的季节</a>
        </p>
    </div>
</footer>
<script src="http://thinkphp.com/Public/dedicine/js/bootstrap.min.js"></script>
<script src="http://thinkphp.com/Public/pc/js/jquery.ias.js"></script>
<script src="http://thinkphp.com/Public/pc/js/scripts.js"></script>

</body>
</html>