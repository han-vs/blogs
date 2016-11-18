<?php
return array(
	//设置PUBLIC目录绝对路径到系统常量
    'TMPL_PARSE_STRING'=>['__PUBLIC__'=>"http://".$_SERVER["SERVER_NAME"].'/Public/',
        '__MYHOST__'=>"http://".$_SERVER["SERVER_NAME"].'/index.php',
        ],
    'DB_PREFIX'=>'h_',//表前缀
);