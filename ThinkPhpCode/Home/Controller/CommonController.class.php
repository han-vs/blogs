<?php
    namespace Home\Controller;
    use Think\Controller;
    use MyLib\Custom;
    /**
     * Class CommonController:公共控制器
     * @package Home\Controller
     */
    class CommonController extends Controller{

        //声明自定义对象属性
         protected $custom;
        // 页面访问控制
        public function _initialize(){
            //实例化自定义对象
            $this->custom=new Custom();
            //统计访问
            $this->statistics();

        }

        /**
         * 统计信息
         */
        private function statistics(){

            //获取操作平台信息
            $os=$this->custom->user->getOS($_SERVER['HTTP_USER_AGENT']);
            //获取IP
            $ip=get_client_ip();
            //获取IP位置
            $ipData=$this->custom->user->getCity($ip);
            //获取省份
            $region=$ipData['region'];
            //获取城市
            $city=$ipData['city'];
            //获取区县
            $county=$ipData['county'];
            //获取运营商
            $isp=$ipData['isp'];
            //获取当前时间
            $date=date('Y-m-d H:i:s',time());
            //定义插入数据
            $dataArr=array(
                'uip'=>$ip,
                'city'=>$region.$city.$county,
                'date'=>$date,
                'mno'=>$isp
            );

            //插入数据
            $model=M('user');
            if(!isset($_SESSION['usermes'])){
                //插入新的浏览数据
                $id=$model->add($dataArr);
                $_SESSION['usermes']=$model->count();
            }
           // 获取总访问量
            $count=$model->count();
            $userMess=['ip'=>$ip,'city'=>$region.$city.$county,'count'=>$count,'some'=>$_SESSION['usermes']];
            $this->assign('userMess',$userMess);
        }

    }