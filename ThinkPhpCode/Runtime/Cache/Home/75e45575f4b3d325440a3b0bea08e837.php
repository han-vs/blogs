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
    <link rel="stylesheet" type="text/css" href="http://thinkphp.com/Public/pc/css/gather.css">
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
<title>日志-单调的季节</title>
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
                    <li><a data-cont="笔记" href="http://thinkphp.com/index.php/Note">笔记</a></li>
                    <li class="selected"><a data-cont="日志" href="http://thinkphp.com/index.php/Log">日志</a></li>
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
        <div class="content">
            <!--&lt;!&ndash;左侧内容&ndash;&gt;-->
            <!--<?php if(is_array($logRes)): foreach($logRes as $key=>$v): ?>-->
                    <!--<a href="http://thinkphp.com/index.php/Note/lists.html?class=<?= base64_encode($v.id)?>">-->
                        <!--<img src="<?php echo ($v["imgurl"]); ?>" title="<?php echo ($v["name"]); ?>"><br>-->
                        <!--<label>心情指数:<?php echo ($v["mood"]); ?></label>-->
                        <!--<label>发布时间:<?php echo (date('Y-m-d H:i:s',$v["date"])); ?></label>-->
                    <!--</a>-->
            <!--<?php endforeach; endif; ?>-->
            <ol class="log-list">
                <?php $__FOR_START_12175__=1;$__FOR_END_12175__=5;for($i=$__FOR_START_12175__;$i < $__FOR_END_12175__;$i+=1){ ?><li rel="float-shadow" class="button float-shadow">
                    <img  src="http://thinkphp.com/Public/dedicine/images/sort/img-css.jpg" alt="">
                    <div>
                        <a href=""><h4>测试测试</h4> </a>
                        <label>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</label>
                    </div>
                    <div>
                        <label>2016-11-15 15:12:33</label>
                    </div>
                </li><?php } ?>
            </ol>
        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">访客信息</a>
                    </li>
                    <li role="presentation">
                        <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">您的位置</a>
                    </li>
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
        </div>
        <div class="widget widget_hot">
            <h3>日志控</h3>
            <form action="" method="post" id="logSearch">
                <label>选择日期查询</label>
                <select name="year" onchange="search.day()">
                    <?php $__FOR_START_26262__=2016;$__FOR_END_26262__=date('Y')+1;for($yi=$__FOR_START_26262__;$yi < $__FOR_END_26262__;$yi+=1){ if($yi == date('Y')): ?><option selected value="<?php echo ($yi); ?>"><?php echo ($yi); ?>年</option>
                        <?php else: ?>
                         <option value="<?php echo ($yi); ?>"><?php echo ($yi); ?>年</option><?php endif; } ?>
                </select>
                <select name="month" onchange="search.day()">
                    <?php $__FOR_START_27000__=1;$__FOR_END_27000__=13;for($mi=$__FOR_START_27000__;$mi < $__FOR_END_27000__;$mi+=1){ if($mi == date('m')): ?><option selected value="<?php echo ($mi); ?>"><?php echo ($mi); ?>月</option>
                        <?php else: ?>
                            <option value="<?php echo ($mi); ?>"><?php echo ($mi); ?>月</option><?php endif; } ?>
                </select>
                <select name="day">
                    <?php $__FOR_START_23327__=1;$__FOR_END_23327__=date('t')+1;for($di=$__FOR_START_23327__;$di < $__FOR_END_23327__;$di+=1){ if($di == date('d')): ?><option selected value="<?php echo ($di); ?>"><?php echo ($di); ?>日</option>
                        <?php else: ?>
                            <option value="<?php echo ($di); ?>"><?php echo ($di); ?>日</option><?php endif; } ?>
                </select>
            </form>
            <div id="search" onclick="search.submit()">查 找</div>
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