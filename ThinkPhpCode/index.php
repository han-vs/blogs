<?php

    /**
     * 网站入口
     * User: hanvs
     * Date: 2016/11/07
     * Time: 21:17
     */

    //隐蔽所有错误信息
    error_reporting(0);
set_time_limit(1800) ;
    //设置默认时区
    date_default_timezone_set('PIC');

    //开启SESSION
    session_start();

    //定义项目名称
    define('APP_NAME','Home');

    //开启调试模式
    define('APP_DEBUG',true);

    //定义默认访问模块
    define('BIND_MODULE',is_mobile());

    //引入ThinkPHP
    require_once './ThinkPHP/ThinkPHP.php';

    /**
     * 判断客户端设备类型
     * @return string
     */
    function is_mobile(){
        //获取客户端信息
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        //定义移动端信息
        $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
        //声明判断变量，默认值PC端
        $is_mobile = 'Home';
        //遍历定义的移动端信息和客户端信息对比
        foreach ($mobile_agents as $device) {
            //对比信息判断是否是移动端
            if (stristr($user_agent, $device)) {
                //如果是移动端则将模块值改为移动端模块
                //$is_mobile = 'Mobile';
                break;
            }
        }
        //返回结果
        return $is_mobile;
    }

