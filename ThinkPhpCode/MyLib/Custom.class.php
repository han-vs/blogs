<?php
namespace MyLib;

use MyLib\Custom\City;
use MyLib\Custom\imageScaling;
use MyLib\Custom\User;
use MyLib\Custom\Watermark;
use MyLib\Custom\error404;
use MyLib\Cloud\Manage;
use MyLib\Custom\Skip;
use MyLib\Custom\CreateQRcode;

/**
 * Class 自定义类库:公共控制类
 * @package MyLib
 */
class Custom
{
    public $imgZoom;
    public $imgWatermark;
    public $user;
    public $err404;
    public $qiniu;
    public $skip;
    public $qrcode;
    public $city;

    /**
     * 初始化
     * Custom constructor.
     */
    public function __construct()
    {
        $this->imgZoom = new imageScaling();
        $this->imgWatermark = new Watermark();
        $this->user = new User();
        $this->qiniu = new Manage();
        $this->err404 = new error404();
        $this->skip = new Skip();
        $this->qrcode = new CreateQRcode();
        $this->city=new City();
        //传入纯真IP数据库文件路径
    }

    //显示404页面
    public function showErr()
    {
        die(file_get_contents(APP_PATH . 'Home/index.html'));
    }

    

    /**
     * 计算时间差
     * @param $startTime :开始时间
     * @param $endTime :结束时间
     * @return array:返回结果
     */
    public function time_difference($startTime, $endTime)
    {
        if ($startTime < $endTime) {
            $starttime = $startTime;
            $endtime = $endTime;
        } else {
            $starttime = $endTime;
            $endtime = $startTime;
        }
        $timediff = $endtime - $starttime;
        $days = intval($timediff / 86400);
        $remain = $timediff % 86400;
        $hours = intval($remain / 3600);
        $remain = $remain % 3600;
        $mins = intval($remain / 60);
        $secs = $remain % 60;
        $res = array("day" => $days, "hour" => $hours, "min" => $mins, "sec" => $secs);
        return $res;
    }

    /**
     * 帮助解释
     */
    public function help()
    {
        echo '<br><h2 style="color:blue">实例化Custom类后，通过属性调用相应功能函数。</h2><br>
            <span style="color:green">
            $this->imgZoom:图片缩放属性。<br>
            $this->imgWatermark:图片添加水印属性。<br>
            $this->user:获取用户ip和ip地区。<br>
            $this->err404:添加站点404页面。<br>
            $this->qiniu:七牛云储存功能。</span><br>
            $this->skip:跳转,只需传入index.php后的路径即可<br>';
    }
}
    

    
    