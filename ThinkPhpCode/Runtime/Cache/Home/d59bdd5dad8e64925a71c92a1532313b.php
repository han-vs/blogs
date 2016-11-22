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
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/pc/css/gather.css">
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/pc/css/hoverBas.css">
    <link rel="shortcut icon" href="http://thinkphp.com/Public/dedicine/images/favicon.ico">
    <script src="http://thinkphp.com/Public/dedicine/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/nprogress.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/jquery.lazyload.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/gather.js" type="text/javascript"></script>
    <!--[if gte IE 9]>
    <script src="http://thinkphp.com/Public/dedicine/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/respond.min.js" type="text/javascript"></script>
    <script src="http://thinkphp.com/Public/pc/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <title>首页-单调的季节</title>
</head>
<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu animated fadeInLeftBig">
                    <li>今天的感悟是明天的成就，</li>
                    <li>坦然面对生活即是对未来的承诺—</li>
                    <li>
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
                <ul class="nav navbar-nav  navbar-right animated fadeInDownBig">
                    <li class="selected"><a data-cont="单调的季节" href="http://thinkphp.com/index.php">首页</a></li>
                    <li><a data-cont="笔记" href="http://thinkphp.com/index.php/Note">笔记</a></li>
                    <li><a data-cont="日志" href="http://thinkphp.com/index.php/Log">日志</a></li>
                    <li><a data-cont="相册" href="http://thinkphp.com/index.php/Photo">相册</a></li>
                    <li><a data-cont="回忆录" href="http://thinkphp.com/index.php/Memoirs">回忆录</a></li>
                    <li><a data-cont="时光轴" href="http://thinkphp.com/index.php/TimeLine">时光轴</a></li>
                    <li><a data-cont="音悦盒" href="http://thinkphp.com/index.php/MusicBox">音悦盒</a></li>
                    <li><a data-cont="留言板" href="http://thinkphp.com/index.phpMessages">留言板</a></li>
                    <li><a data-cont="工具箱" href="http://thinkphp.com/index.php/Tool">工具箱</a></li>
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
                    <a target="_blank" href="http://thinkphp.com/index.php/Note/article.html?class=<?php echo (base64_encode($recommend["type"])); ?>&name=<?php echo (base64_encode($recommend["name"])); ?>" title="<?php echo ($recommend["name"]); ?>"><?php echo ($recommend["name"]); ?></a>
                </h2>
                <p class="note"><?php echo (mb_substr($recommend["content"],0,50,'utf-8')); ?>...</p>
            </article>
            <div class="title">
                <h3>最新文章</h3>
                <div class="more">
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('html') ?>" title="HTML">HTML</a>
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('css') ?>" title="CSS">CSS</a>
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('javascript') ?>" title="javascript">javascript</a>
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('jquery') ?>" title="jQuery">jQuery</a>
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('php') ?>" title="PHP">PHP</a>
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('mysql') ?>" title="MySQL">MySQL</a>
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('csharp') ?>" title="C Sharp">C Sharp</a>
                    <a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode('nodejs') ?>" title="Node.js">Node.js</a>
                    <a href="http://thinkphp.com/index.php/Note" title="">更多</a>
                </div>
            </div>
            <?php if(is_array($NewLog)): foreach($NewLog as $key=>$v): ?><article class="excerpt excerpt-1" style="">
                <a class="focus" href="http://thinkphp.com/index.php/Note/article.html?class=<?php echo (base64_encode($v["type"])); ?>&name=<?php echo (base64_encode($v["name"])); ?>" title="" target="_blank">
                    <img class="thumb" data-original="http://thinkphp.com/Public/dedicine/images/sort/img-html.jpg"
                         src="http://thinkphp.com/Public/dedicine/images/sort/img-<?php echo ($v["type"]); ?>.jpg"
                         style="display: inline;">
                </a>
                <header><a class="cat" href="http://thinkphp.com/index.php/Note/lists.html?class=<?php echo (base64_encode($v["type"])); ?>" title="HTML"><?php echo (ucfirst($v["type"])); ?><i></i></a>
                    <h2><a href="http://thinkphp.com/index.php/Note/article.html?class=<?php echo (base64_encode($v["type"])); ?>&name=<?php echo (base64_encode($v["name"])); ?>" title="<?php echo ($v["name"]); ?>"
                           target="_blank"><?php echo ($v["name"]); ?></a>
                    </h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo (date('Y-m-d H:i:s',$v["date"])); ?></time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> <?php echo ($v["view"]); ?></span>
                    <a class="comment" href="" title="评论" target="_blank">
                        <i class="glyphicon glyphicon-comment"></i> <?php echo ($v["discuss"]); ?></a>
                </p>
                <p class="note"><?php echo (mb_substr($v["content"],0,80,'utf-8')); ?>...</p>
            </article><?php endforeach; endif; ?>
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
                <a href="http://thinkphp.com/index.php/Tool/manual.html?class=<?= base64_encode('html')?>" title="HTML" target="_blank">HTML</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://thinkphp.com/index.php/Tool/manual.html?class=<?= base64_encode('css')?>" title="CSS" target="_blank">CSS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://thinkphp.com/index.php/Tool/manual.html?class=<?= base64_encode('javascript')?>" title="javaScript" target="_blank">javaScript</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://thinkphp.com/index.php/Tool/manual.html?class=<?= base64_encode('php')?>" title="PHP" target="_blank">PHP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://thinkphp.com/index.php/Tool/manual.html" title="更多手册文档" target="_blank">更多</a>
            </div>

        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>
                <?php if(is_array($newest)): foreach($newest as $key=>$v): ?><li>
                    <a title=""
                       href="http://thinkphp.com/index.php/Note/article.html?class=<?php echo (base64_encode($v["type"])); ?>&name=<?php echo (base64_encode($v["name"])); ?>">
                        <span class="thumbnail">
                            <img class="thumb" data-original="http://thinkphp.com/Public/dedicine/images/sort/img-<?php echo ($v["type"]); ?>.jpg"
                                 src="http://thinkphp.com/Public/dedicine/images/sort/img-<?php echo ($v["type"]); ?>.jpg" style="display: block;">
                        </span>
                        <span class="text"><?php echo ($v["name"]); ?></span>
                            <span class="muted">
                                <i class="glyphicon glyphicon-time"></i>

                                <?php echo (date('Y-m-d H:i:s',$v["date"])); ?>
                        </span>
                        <span class="muted">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            <?php echo ($v["view"]); ?>
                        </span>
                    </a>
                </li><?php endforeach; endif; ?>
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
<script src="http://thinkphp.com/Public/dedicine/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://thinkphp.com/Public/pc/js/jquery.ias.js" type="text/javascript"></script>
<script src="http://thinkphp.com/Public/pc/js/scripts.js" type="text/javascript"></script>
</body>
</html>