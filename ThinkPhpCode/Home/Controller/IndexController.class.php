<?php
/**
 * PC端INDEX控制器
 * User: hanvs
 * Date: 2016/11/07
 * Time: 21:17
 */
    namespace Home\Controller;

    class IndexController extends CommonController{

        /**
         * 首页
         */
        public function index(){
            $this->display('home');
        }
    }