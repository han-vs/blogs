<?php

//命名空间
namespace MyLib\Custom;
//引入文件
include_once APP_PATH.'MyLib/Custom/phpqrcode/phpqrcode.php';
/**
 * 二维码生成
 */
class CreateQRcode
{

    //声明二维码处理对象
    private $qrcode;

    //构造初始化
    public function __construct()
    {

        //实例化二维码处理类对象
        $this->qrcode =new \QRcode();
    }

    /**
    /**
     * 开始生成指定类型二维码
     * @param  string $url :二维码指向的链接地址
     * @param  boolean $img :二维码logo文件
     * @param  boolean $filename :保存位置
     * @param  integer $size :二维码尺寸，按比例生成(33px*$size)
     * @param bool $isReturn:是否返回生成的资源
     * @return bool|void
     */
    public function create($url = '', $img = false, $filename = false, $size = 0,$isReturn=false)
    {
        //判断参数值
        if (empty($url) || $size < 1) return;

        //容错级别
        $errorCorrectionLevel = '3';

        //生成二维码图片
        $this->qrcode->png($url, $filename, $errorCorrectionLevel, $size, 2);

        //判断是否生成带logo二维码
        if (!$img) return;

        //获取logo
        $logo = $img;

        //获取二维码
        $QR = $filename;

        //取出二维码并创建图像资源
        $QR = imagecreatefromstring(file_get_contents($QR));
        $logo = imagecreatefromstring(file_get_contents($logo));

        //二维码图片宽度
        $QR_width = imagesx($QR);

        //二维码图片高度
        $QR_height = imagesy($QR);

        //logo图片宽度
        $logo_width = imagesx($logo);

        //logo图片高度
        $logo_height = imagesy($logo);

        //调整logo尺寸
        $logo_qr_width = $QR_width / 5;
        $scale = $logo_width / $logo_qr_width;
        $logo_qr_height = $logo_height / $scale;
        $from_width = ($QR_width - $logo_qr_width) / 2;

        //重新组合图片并调整大小
        imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

        //获取需要保持的格式
        $suffix=trim(pathinfo($filename, PATHINFO_EXTENSION));
        $type=($suffix=='jpg'?'jpeg':($suffix=='bmp'?'2wbmp':($suffix=='gif'?'gif':($suffix=='png'?'png':''))));

        //如果格式正确则保存该二维码
        if($type){
            //拼接输出函数
            $type='image'.trim($type);
            //保存二维码
            $type($QR, $filename);
        }


        //判断是否需要返回该资源
        if($isReturn){
            return $QR;
        }
            return;
    }
}