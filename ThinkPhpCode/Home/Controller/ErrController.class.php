<?php
/**
 * 404页面
 * User: hanvs
 * Date: 2016/11/11
 * Time: 23:02
 */
namespace Home\Controller;
    class ErrController extends CommonController{
        public function error(){
            //解密get错误信息并传入模板
            $title=base64_decode(I('errtitle'));
            $content=base64_decode(I('content'));
            $this->assign('content',$content);
            $this->assign('title',$title);
            $this->display();
        }
    }