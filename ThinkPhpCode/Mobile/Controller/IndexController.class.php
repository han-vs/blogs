<?php
/**
 * 移动端INDEX控制器
 * User: hanvs
 * Date: 2016/11/7
 * Time: 21:16
 */
    namespace Mobile\Controller;

    class IndexController extends CommonController{

        /**
         * 首页
         */
        public function index(){
            $this->display('home');
        }
    }