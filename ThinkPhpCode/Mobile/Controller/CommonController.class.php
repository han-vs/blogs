<?php
    namespace Mobile\Controller;
    use Think\Controller;
    use MyLib\Custom;
    /**
     * Class CommonController:公共控制器
     * @package Mobile\Controller
     */
    class CommonController extends Controller{

        //声明自定义对象属性
         protected $custom;
        // 页面访问控制
        public function _initialize(){
            //实例化自定义对象
            $this->custom=new Custom();

            
        }
    }