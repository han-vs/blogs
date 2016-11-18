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
    <title><?php echo ($title); ?>-单调的季节</title>
    <style type="text/css">
        .panel
        {
            padding: 80px 20px 0px;
            min-height: 400px;
            cursor: default;
        }
        .text-center
        {
            margin: 0 auto;
            text-align: center;
            border-radius: 10px;
            max-width: 900px;
            -moz-box-shadow: 0px 0px 5px rgba(0,0,0,.3);
            -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.3);
            box-shadow: 0px 0px 5px rgba(0,0,0,.1);
        }
        .float-left
        {
            float: left !important;
        }
        .float-right
        {
            float: right !important;
        }
        img
        {
            border: 0;
            vertical-align: bottom;
        }
        h2
        {
            padding-top: 20px;
            font-size: 20px;
        }
        .padding-big
        {
            padding: 20px;
        }
        .alert
        {
            border-radius: 5px;
            padding: 15px;
            border: solid 1px #ddd;
            background-color: #f5f5f5;
        }
    </style>
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
                    <a href="http://thinkphp.com/index.php" title="单调的季节">
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
                <ul class="nav navbar-nav  navbar-right animated fadeInDownBig">
                    <li><a data-cont="单调的季节" href="http://thinkphp.com/index.php">首页</a></li>
                    <li class="selected"><a data-cont="笔记" href="http://thinkphp.com/index.php/Note">笔记</a></li>
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
    <div class="panel">
        <div class="text-center">
            <h2><stong><?php echo ($content); ?></stong></h2>
            <div class="padding-big">
                <a href="http://thinkphp.com/index.php" class="btn btn-primary" >返回首页</a>
            </div>
        </div>
    </div>
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