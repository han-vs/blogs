<?php
return array(
    // 允许访问的模块列表
    'MODULE_ALLOW_LIST' => array('Home','Model','Admin'),
    // 默认模块
//    'DEFAULT_MODULE' => 'Home',
    /*数据库设置*/
    'DB_TYPE'=>'mysql',//数据库类型
    'DB_HOST'=>'118.244.213.127',//主机
    'DB_PORT'=>'3306',//端口
    'DB_CHARSET'=>'utf8',//设置字符集
    'DB_USER'=>'root',//用户名
    'DB_PWD'=>'hanyi199529',//密码
    'DB_NAME'=>'blogs',//数据库名
    'DB_PREFIX'=>'h_',//表前缀

    // 多个伪静态后缀设置 用|分割
    'URL_HTML_SUFFIX' => 'html',

    /*缓存配置*/
    'DATA_CACHE_TYPE'=>'file',//设置缓存方式为file
    'DATA_CACHE_TIME'=>'200',//缓存周期200秒
//    'SHOW_PAGE_TRACE'=>true,//开启跟踪
    /*添加自定义类库*/
    'AUTOLOAD_NAMESPACE' => array(
        'Lib'     => APP_PATH.'MyLib',
    ),
    //'TMPL_EXCEPTION_FILE'=>THINK_PATH.'Tpl/error.tpl',// 异常页面的模板文件
    //设置URL模式，2：PATH_INFO
    'URL_MODEL' => '2',
);