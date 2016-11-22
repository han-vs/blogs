<?php
    namespace Home\Controller;
    use Think\Controller;
    use MyLib\Custom;
    /**
     * Class CommonController:公共控制器
     * @package Home\Controller
     */
    class CommonController extends Controller{
        protected $errHost='index.php/Err/error';
        //定义所有笔记分类
        protected $list_type = ['html', 'css', 'javascript', 'jquery', 'php', 'mysql', 'linux', 'ffmpeg',
            'csharp', 'nodejs', 'apache', 'nginx', 'winserver', 'photoshop', 'go'];

        //声明自定义对象属性
         protected $custom;
        // 页面访问控制
        public function _initialize(){
            //实例化自定义对象
            $this->custom=new Custom();
            //统计访问
            $this->statistics();
            //查询最新文章
            $this->newest();

        }

        /**
         * 统计信息
         */
        private function statistics(){
            //实例化USER模型
            $model = D('User');
            //判断该用户访问的数据是否存入SESSION
            if(!isset($_SESSION['usermes'])) {
                //获取操作平台信息
                $os = $this->custom->user->getOS($_SERVER['HTTP_USER_AGENT']);
                //获取IP
                $ip = get_client_ip();
                //获取IP位置
                $ipData = $this->custom->user->getCity($ip);
                //获取省份
                $region = $ipData['region'];
                //获取城市
                $city = $ipData['city'];
                //获取区县
                $county = $ipData['county'];
                //获取运营商
                $isp = $ipData['isp'];
                //获取当前时间
                $date = date('Y-m-d H:i:s', time());
                //定义插入数据
                $dataArr = array(
                    'uip' => $ip,
                    'city' => $region . $city . $county,
                    'date' => $date,
                    'mno' => $isp,
                    'os'=>$os
                );

                //插入数据
                if (!isset($_SESSION['usermes'])) {
                    //插入新的浏览数据
                    $id = $model->add($dataArr);
                    $_SESSION['usermes'] = $model->count();
                }
                // 获取总访问量
                $count = $model->count();
                $userMess = ['ip' => $ip, 'city' => $region . $city . $county,
                    'count' => $count, 'some' => $count];
                //存入SESSION
                $_SESSION['usermes']=$userMess;
            }
            //修改访问总数数据
            $_SESSION['usermes']['count']=$model->count();
            //传入所有模板
            $this->assign('userMess',$_SESSION['usermes']);
        }

        /**
         * 最新评论的文章
         */
        private function newest(){
            //实例化Note模型
            $note=D('Note');
            //实例化NoteDiscuss模型
            $dis=D('NoteDiscuss');
            //定义数组接收评论表遍历出的数据
            $dis_data=array();
            //定义数组接收最后最新评论的文章数据
            $note_data=array();
            foreach($this->list_type as $v){
                $dis_data[$v]= $dis->field("pids")->order('date desc')->limit(1)->where(['ptype'=>$v])->select()[0]['pids'];
                if(!$dis_data[$v]){
                    unset($dis_data[$v]);
                }
            }
            foreach ($dis_data as $k=>$v){
                $note_data[$k]=$note->field('name,date,view,type')->where(['id'=>$v])->select()[0];
            }
            //传入所有模板
            $this->assign('newest',$note_data);
        }
    }