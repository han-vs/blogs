<?php
/**
 * Created by PhpStorm.
 * User: hanvs
 * Date: 2016/10/21
 * Time: 16:02
 */

/**
 * Class error404:添加404页面
 * @package MyLib
 */
namespace MyLib\Custom;

class error404{
    public function showdir($path='./',$notfile=array()){
        /*替换404文件路径*/
        $content=file_get_contents('./Home/View/404/404.html');
        $content=preg_replace('/__PUBLIC__/','http://'.$_SERVER['SERVER_NAME'].'/Home/Public/',$content);
        $dh = opendir($path);//打开目录
        array_push($notfile,'Index','Classify','View','Login');
        while(($d = readdir($dh)) != false){
            //逐个文件读取，添加!=false条件，是为避免有文件或目录的名称为0
            if($d=='.' || $d == '..'){//判断是否为.或..，默认都会有
                continue;
            }
            if(is_dir($path.'/'.$d)){//如果为目录
                if(!in_array(ucfirst($d),$notfile)){
                    $html='index.html';
                    file_put_contents($path.'/'.$d.'/'.$html,$content);
                }
                $this->showdir($path.'/'.$d,$notfile);//继续读取该目录下的目录或文件
            }
        }
    }
}