<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
    <title>单调的季节</title>
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
                    <img src="http://thinkphp.com/Public/pc/images/icon.png" class="animated flip"  alt="单调的季节">
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
                    <li class="selected"><a data-cont="单调的季节" href="http://thinkphp.com/index.php">首页</a></li>
                    <li><a data-cont="笔记" href="http://thinkphp.com/index.php/Note/">笔记</a></li>
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
        <!--轮播START-->
        <div class="content">
            <div id="focusslide" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#focusslide" data-slide-to="0" class="active"></li>
                    <li data-target="#focusslide" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="" target="_blank" title="">
                            <img src="http://thinkphp.com/Public/dedicine/images/sort/img-php.jpg"
                                 class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="" target="_blank" title="">
                            <img src="http://thinkphp.com/Public/dedicine/images/sort/img-linux.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
                <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">上一个</span>
                </a>
                <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">下一个</span> </a>
            </div>
            <!--轮播END-->
            <article class="excerpt-minic excerpt-minic-index">
                <h2><span class="red">【推荐】</span>
                    <a target="_blank" href="" title="">标题标题</a>
                </h2>
                <p class="note">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
            </article>
            <div class="title">
                <h3>最新文章</h3>
                <div class="more">
                    <a href="" title="">HTML</a>
                    <a href="" title="">CSS</a>
                    <a href="" title="">javascript</a>
                    <a href="" title="">jQuery</a>
                    <a href="" title="">PHP</a>
                    <a href="" title="">MySQL</a>
                    <a href="" title="">C Sharp</a>
                    <a href="" title="">Node.js</a>
                    <a href="" title="">更多</a>
                </div>
            </div>
            <article class="excerpt excerpt-1" style="">
                <a class="focus" href="" title="" target="_blank">
                    <img class="thumb" data-original="http://thinkphp.com/Public/dedicine/images/sort/img-html.jpg" src="http://thinkphp.com/Public/dedicine/images/sort/img-html.jpg"
                         style="display: inline;">
                </a>
                <header><a class="cat" href="" title="HTML">HTML<i></i></a>
                    <h2><a href="" title=""
                           target="_blank"></a>
                    </h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-10-14</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span>
                    <a class="comment" href="" title="评论" target="_blank">
                        <i class="glyphicon glyphicon-comment"></i> 4</a>
                </p>
                <p class="note">缩略内容缩略内容缩略内容缩略内容缩略内容缩略内容</p>
            </article>
            <article class="excerpt excerpt-1" style="">
                <a class="focus" href="" title="" target="_blank">
                    <img class="thumb" data-original="http://thinkphp.com/Public/dedicine/images/sort/img-css.jpg" src="http://thinkphp.com/Public/dedicine/images/sort/img-css.jpg"
                         style="display: inline;">
                </a>
                <header><a class="cat" href="" title="CSS">CSS<i></i></a>
                    <h2><a href="" title=""
                           target="_blank"></a>
                    </h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-10-14</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span>
                    <a class="comment" href="" title="评论" target="_blank">
                        <i class="glyphicon glyphicon-comment"></i> 4</a>
                </p>
                <p class="note">缩略内容缩略内容缩略内容缩略内容缩略内容缩略内容</p>
            </article>
            <article class="excerpt excerpt-1" style="">
                <a class="focus" href="" title="" target="_blank">
                    <img class="thumb" data-original="http://thinkphp.com/Public/dedicine/images/sort/img-mysql.jpg" src="http://thinkphp.com/Public/dedicine/images/sort/img-mysql.jpg"
                         style="display: inline;">
                </a>
                <header><a class="cat" href="" title="MySQL">MySQL<i></i></a>
                    <h2><a href="" title=""
                           target="_blank"></a>
                    </h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-10-14</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span>
                    <a class="comment" href="" title="评论" target="_blank">
                        <i class="glyphicon glyphicon-comment"></i> 4</a>
                </p>
                <p class="note">缩略内容缩略内容缩略内容缩略内容缩略内容缩略内容</p>
            </article>
            <nav class="pagination" style="display: none;">
                <ul>
                    <li class="prev-page"></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="?page=2">2</a></li>
                    <li class="next-page"><a href="?page=2">下一页</a></li>
                    <li><span>共 2 页</span></li>
                </ul>
            </nav>
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
            </span></div>
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
                            <img class="thumb" data-original="http://thinkphp.com/Public/dedicine/images/sort/img-jquery.jpg" src="http://thinkphp.com/Public/dedicine/images/sort/img-jquery.jpg"
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