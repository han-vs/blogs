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
            //取出数据
            $this->selectDate();
            $this->display('home');
        }
        private function selectDate(){

            //取出缓存
            $indexDates=S('indexDates');
            //判断缓存是否存在
            if(empty($indexDates)) {
                $note = D('Note');
                $dis = D('NoteDiscuss');
                //定义数据接收数组
                $data = array();
                //查询各类文章的最新的一条数据
                foreach ($this->list_type as $v) {
                    //根据id倒序查询各分类最后一个id字段数据
                    $data[$v] = $note->field('id,name,type,date,view,content')->order('id desc')->limit(1)->where("type='$v'")->select()[0];
                    //销毁空元素
                    if (is_null($data[$v])) {
                        unset($data[$v]);
                    } else {
                        //查询评论数
                        $data[$v]['discuss'] = count($dis->field('name')->where(['pids' => $data[$v]['id'], 'status' => 1])->select());
                    }
                }
                //查询查看量最多的一篇文章
                $recommend = $note->field('name,content,type')->order('view desc')->limit(1)->select()[0];
                //将数据装入数组
                $indexDates['data']=$data;
                $indexDates['recommend']=$recommend;
                //写入缓存
                S('indexDates', $indexDates, 300);
            }
            //最新文章数据传入模板
            $this->assign('NewLog',$indexDates['data']);
            //推荐文章数据传入模板
            $this->assign('recommend',$indexDates['recommend']);
        }
    }