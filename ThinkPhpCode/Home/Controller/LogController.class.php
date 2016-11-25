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
            //获取参数个数
            $count=count(I('get.'));
            $id=trim(base64_decode(base64_decode(I('get.id'))));
            $name=trim(base64_decode(base64_decode(I('get.name'))));
           if($count!=2||empty($id)||empty($name)||!is_numeric($id)){
                //如果参数错误则跳转
                $this->redirect($this->errHost,
                    array('errtitle' => base64_encode('查找错误'), 'content' => base64_encode('对不起！没有找到该日志。')
                    )
                );
                //停止程序
                exit;
            }
            $log=D('Log');
            $res=$log->where(['id'=>$id,'name'=>$name])->select()[0];
            $this->assign('res',$res);
            $this->display();
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