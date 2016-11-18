<?php
/**
 * Created by PhpStorm.
 * User: hanvs
 * Date: 2016/10/21
 * Time: 15:59
 */
/**
 * 图片缩放类
 */
namespace MyLib\Custom;
class imageScaling{

    /**
     * @param string $source:图片路径
     * @param int $newWidth:缩放宽度
     * @param int $newHeight:缩放高度
     * @param string $newfile:保存路径
     * @return string
     */
    public function startScaling($source='',$newWidth=0,$newHeight=0,$newfile='')
    {
        if(!$source||!$newWidth||!$newHeight||!$newfile){
            $this->help();
            return null;
        }
        //获取图片信息
        $imageMes=getimagesize($source);
        //获取图片类型
        $imageType=$imageMes['mime'];
        //定义图片类型
        $type='';
        //匹配图像类型
        switch($imageType){
            case 'image/jpeg':
                $type='jpeg';
                break;
            case 'image/png':
                $type='png';
                break;
            case 'image/gif':
                $type='gif';
                break;
            default:
                return '类型错误';
                break;
        }
        //定义图片创建函数
        $imageCreate='imagecreatefrom'.$type;
        //定义图像输出函数
        $imageOut='image'.$type;
        //创建新的图像
        $new_f=imagecreatetruecolor($newWidth, $newHeight);
        //用资源图片创建图像
        $sour_f=$imageCreate($source);
        //拷贝资源图片到新图像(缩放)
        imagecopyresampled($new_f, $sour_f, 0, 0, 0, 0, $newWidth, $newHeight, $imageMes[0], $imageMes[1]);
        //输出图片到浏览器
        $imageOut($new_f,$newfile);
        //销毁图片
        imagedestroy($new_f);
        imagedestroy($sour_f);
        return '缩放成功';
    }
    public function help(){
        echo '<font color="green">startScaling(图片路径,缩放宽度,缩放高度,保存路径)<br></font>>';
    }
}
