<?php
/**
 * Created by PhpStorm.
 * User: hanvs
 * Date: 2016/10/21
 * Time: 15:59
 */
/**
 * Class Watermark:水印处理类
 * @package MyLib
 */
namespace MyLib\Custom;
class Watermark{
    //定义参数数组
    public $parameter=array(
        'text'=>[
            'imgPath','fontPath','content','newImgPath','newName','fontSize','color','rotate','left','top'
        ],
        'img'=>['srcImg'=>null,'waterImg'=>null,'savepath'=>null,'savename'=>null,'positon'=>null,'alpha'=>null]
    );

    /**
     * 错误信息
     */
    public $error=null;

    /**
     * 构造函数接收参数
     * @param [type] $parameter['img'] 参数配置
     * @param [type] $type      水印类型:1文字水印，2图片水印
     */
    public function start($type=0,$parameter=null){
        if($type==0&&$parameter==null){
            $this->help();
            return;
        }
        //判断添加类型
        if($type==1){
            $this->parameter['text']=$parameter?$parameter:null;
        }elseif($type==2){
            $this->parameter['img']=$parameter?$parameter:null;
        }else{
            $this->error='添加类型错误';
            return;
        }

        //判断是否是数组
        if(!is_array($this->parameter)){
            $this->error='非数组参数';
            return;
        }

        //匹配类型
        switch($type){
            case 1:
                //判断参数是否正确
                if(count($this->parameter['text'])<10){
                    $this->error='参数个数不正确';
                    return;
                }else{
                    //遍历检查参数
                    foreach($this->parameter['text'] as $v){
                        if(is_null($v)){
                            $this->error='参数不正确';
                            return;
                        }
                    }
                }
                //执行文字水印
                return $this->img_text();

                break;
            case 2:
                //判断参数是否正确
                if(count($this->parameter['img'])<6){
                    $this->error='参数个数不正确';
                    return;
                }else{
                    //遍历检查参数
                    foreach($this->parameter['img'] as $v){
                        if(is_null($v)){
                            $this->error='参数不正确';
                            return;
                        }
                    }
                }
                //执行图片水印方法，并返回结果
                return $this->img_water_mark();
                break;
        }
    }

    private function img_text(){
        //获取图片
        $src =$this->parameter['text']['imgPath'];
        //获取扩展名
        $suffix=pathinfo($src)['extension'];
        //获取图片信息
        $info = getimagesize($src);
        //通过编号获取图像类型
        $type = image_type_to_extension($info[2],false);
        //获取RGB字体颜色
        $color=$this->parameter['text']['color'];
        //获取文字
        $content=$this->parameter['text']['content'];
        //获取字体文件
        $font=$this->parameter['text']['fontPath'];
        //获取字体大小
        $size=$this->parameter['text']['fontSize'];
        //获取旋转角度
        $rotate=$this->parameter['text']['rotate'];
        //获取左边距
        $left=$this->parameter['text']['left'];
        //获取顶部距离
        $top=$this->parameter['text']['top'];
        //获取保存路径
        $savePath=$this->parameter['text']['newImgPath'];
        //获取新文件名
        $saveName=$this->parameter['text']['newName'];
        //设置宽高
        $image = imagecreatetruecolor($info[0], $info[1]);
        //创建图片对象
        $image_src=$this->image_create_from_ext($src);
        imagecopyresampled($image,$image_src,0,0,0,0,$info[0], $info[1],$info[0], $info[1]);
        //设置字体颜色和透明度
        $color = imagecolorallocate($image, $color[0],$color[1], $color[2]);
        //写入文字
        imagettftext($image, $size, $rotate,$left, $top, $color, $font, $content);
        //拼接保存路径
        $path= $savePath.$saveName.'.'.$suffix;
        //匹配类型，保存图片
        switch ($info[2]) {
            case 1: imagegif($image, $path); break;
            case 2: imagejpeg($image,$path); break;
            case 3: imagepng($image, $path); break;
            default:
                $this->error='图片保存失败';
                return; //保存失败
        }
        /*销毁图片*/
        imagedestroy($image);
    }

    /**
     * 添加图片水印
     * @return 返回执行结果
     */
    private function img_water_mark()
    {
        //获取原始图片信息
        $temp = pathinfo($this->parameter['img']['srcImg']);
        //获取文件名及扩展名
        $name = $temp['basename'];
        //获取文件目录
        $path = $temp['dirname'];
        //获取后缀名
        $exte = $temp['extension'];
        $savename = $this->parameter['img']['savename'] ?$this->parameter['img']['savename'] : $name;
        $savepath =$this->parameter['img']['savepath'] ? $this->parameter['img']['savepath'] : $path;

        //拼接新路径
        $savefile = $savepath .'/'. $savename.'.'.$exte;
        //获取文件大小
        $srcinfo = @getimagesize($this->parameter['img']['srcImg']);
        if (!$srcinfo) {
            $this->error='原图不存在';
            return; //原文件不存在
        }
        $waterinfo = @getimagesize($this->parameter['img']['waterImg']);
        if (!$waterinfo) {
            $this->error='水印图片不存在';
            return; //水印图片不存在
        }
        $srcImgObj = $this->image_create_from_ext($this->parameter['img']['srcImg']);
        if (!$srcImgObj) {
            $this->error='原图对象创建失败';
            return; //原文件图像对象建立失败
        }
        $waterImgObj = $this->image_create_from_ext($this->parameter['img']['waterImg']);
        if (!$waterImgObj) {
            $this->error='水印对象创建失败';
            return; //水印文件图像对象建立失败
        }
        switch ($this->parameter['img']['positon']) {
            //1顶部居左
            case 1: $x=$y=0; break;
            //2顶部居右
            case 2: $x = $srcinfo[0]-$waterinfo[0]; $y = 0; break;
            //3居中
            case 3: $x = ($srcinfo[0]-$waterinfo[0])/2; $y = ($srcinfo[1]-$waterinfo[1])/2; break;
            //4底部居左
            case 4: $x = 0; $y = $srcinfo[1]-$waterinfo[1]; break;
            //5底部居右
            case 5: $x = $srcinfo[0]-$waterinfo[0]; $y = $srcinfo[1]-$waterinfo[1]; break;
            default: $x=$y=0;
        }
        imagecopymerge($srcImgObj, $waterImgObj, $x, $y, 0, 0, $waterinfo[0], $waterinfo[1], $this->parameter['img']['alpha']);
        switch ($srcinfo[2]) {
            case 1: imagegif($srcImgObj, $savefile,100); break;
            case 2: imagejpeg($srcImgObj, $savefile,100); break;
            case 3: imagepng($srcImgObj, $savefile,100); break;
            default:
                $this->error='图片保存失败';
                return; //保存失败
        }
        imagedestroy($srcImgObj);
        imagedestroy($waterImgObj);
        return $savefile;
    }

    /**
     * 创建图片对象
     * @param  [type] $imgfile 图片路径
     * @return [type]          返回对象
     */
    private function image_create_from_ext($imgfile)
    {
        $info = getimagesize($imgfile);
        $im = null;
        switch ($info[2]) {
            case 1: $im=imagecreatefromgif($imgfile); break;
            case 2: $im=imagecreatefromjpeg($imgfile); break;
            case 3: $im=imagecreatefrompng($imgfile); break;
        }
        return $im;
    }

    /**
     * 参数帮助
     * @return [type] 帮助信息
     */
    public function help(){
        echo('<style type="text/css">html{background:rgb(185,243,195);}</style><center style="color:red"><h1>参数说明</h1></center><font color="blue">__construct()构造函数:</font><lable style="color:rgb(153,65,65)">第一个参数(水印类型:参数值1表示文字水印，参数值2表示图片水印)。</lable><br><br>'."<font color='blue'>文字水印:</font><font color='green'>array(</font><br><lable style='color:rgb(153,65,65)'>'imgPath'=>'图片路径',<br>'fontPath'=>'字体路径',<br>
                  'content'=>'文字内容',<br>'newImgPath'=>'保存路径',<br>'newName'=>'保存的文件名',<br>
                  'fontSize'=>'字体大小(int)1-100',<br>'color'=>'文字颜色值array(R,G,B)',<br>'rotate'=>'旋转度(int)',<br>'left'=>'距左侧距离(int)',<br>'top'=>'距顶部距离(int)'</lable><br><font color='green'>);</font><br><br><font color='blue'>图片水印:</font><font color='green'>array(</font><br><lable style='color:rgb(153,65,65)'>'srcImg'=>'图片路径',<br>'waterImg'=>'水印图片',<br>'savepath'=>'保存路径',<br>'savename'=>'保存的文件名',<br>'positon'=>'水印位置(1:左上,2:右上,3:居中,4:底左,5:底右)',<br>'alpha'=>'水印透明度(int)0-100'</lable><br><font color='green'>);</font><br>");
    }
}
