<?php
/**
 * 日志
 * User: hanvs
 * Date: 2016/11/20
 * Time: 19:51
 */
    namespace Home\Controller;
    class LogController extends CommonController{
        /**
         * 首页
         */
        public function index(){
            $log=D('Log');
            $res=$log->select();
            $this->assign('logRes',$res);
            $this->display('home');
        }

        /**
         * 显示日志
         */
        public function showLog(){

        }

        /**
         * 查询日志
         */
        public function query(){
            //判断是否是POST请求
            if(!IS_POST){
                return;
            }

        }
    }