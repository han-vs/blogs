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
    <title><?php echo ($title); ?>-文章列表-单调的季节</title>
</head>
<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu animated fadeInLeftBig">
                    <li>今天的感悟是明天的成就，</li>
                    <li>坦然面对生活即是对未来的承诺—</li>
                    <li>hanvs</li>
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
                    <a href="http://thinkphp.com/index.php" title="单调的季节">
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
      <div class="title">
        <h3 style="line-height: 1.3">文章列表</h3>
      </div>
            
       <?php if(is_array($res)): foreach($res as $key=>$v): ?><article class="excerpt excerpt-1">
          <a class="focus" href="http://thinkphp.com/index.php/Note/article.html?class=<?= base64_encode($title) ?>&name=<?= base64_encode($v['name']) ?>" title="<?php echo ($v["name"]); ?>" target="_blank" >
              <img class="thumb" data-original="http://thinkphp.com/Public/dedicine/images/sort/img-<?php echo ($title); ?>.jpg"
                   src="http://thinkphp.com/Public/dedicine/images/sort/img-<?php echo ($title); ?>.jpg"   style="display: inline;">
          </a>
        <header><a class="cat" href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode($title)?>" title="<?php echo ($v["type"]); ?>" ><?php echo ($v["type"]); ?><i></i></a>
          <h2><a href="http://thinkphp.com/index.php/Note/article.html?class=<?= base64_encode($title) ?>&name=<?= base64_encode($v['name']) ?>" title="<?php echo ($v["name"]); ?>" target="_blank" ><?php echo ($v["name"]); ?></a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> <?= date('Y-m-d H:i:s',$v['date'])?></time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> <?php echo ($v["view"]); ?></span>
            <a class="comment" href="http://thinkphp.com/index.php/Note/article.html?class=<?= base64_encode($title) ?>&name=<?= base64_encode($v['name']) ?>#comment_list" title="评论" target="_blank" >
            <i class="glyphicon glyphicon-comment"></i> <?php echo ($v["discussNum"]); ?></a>
        </p>
        <p class="note"><?php echo ($v["content"]); ?></p>
      </article>
           <?php endforeach; endif; ?>
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
      <div class="widget widget_search">
        <form class="navbar-form" action="" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div>
      <div class="widget widget_sentence">
        <h3>标签云</h3>
        <div class="widget-sentence-content">
            <ul class="plinks ptags">
                <?php if(is_array($classNum)): foreach($classNum as $k=>$v): ?><li><a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode($k)?>" title="<?php echo ($k); ?>" draggable="false"><?php echo ($k); ?><span class="badge"><?php echo ($v); ?></span></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
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