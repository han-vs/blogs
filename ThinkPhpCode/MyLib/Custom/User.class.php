<?php
/**
 * Created by PhpStorm.
 * User: hanvs
 * Date: 2016/10/21
 * Time: 16:46
 */
namespace MyLib\Custom;

class User
{
    /**
     * 获取用户IP
     */
    public function getIP()
    {
        $realip = '';
        if (isset($_SERVER)) {
            if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
                $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
                $realip = $_SERVER["HTTP_CLIENT_IP"];
            } else {
                $realip = $_SERVER["REMOTE_ADDR"];
            }
        } else {
            if (getenv("HTTP_X_FORWARDED_FOR")) {
                $realip = getenv("HTTP_X_FORWARDED_FOR");
            } else if (getenv("HTTP_CLIENT_IP")) {
                $realip = getenv("HTTP_CLIENT_IP");
            } else {
                $realip = getenv("REMOTE_ADDR");
            }
        }
        return $realip;
    }

    /**
     * 获取ip地区
     * @param string $ip :IP地址
     * @param int $sw:选择数据
     * @return array|null
     */
    public function getCity($ip = '',$sw=0)
    {
        $url = "http://ip.taobao.com/service/getIpInfo.php?ip=" . $ip;
        $ip = json_decode(file_get_contents($url));
        if ((string)$ip->code == '1') {
            return null;
        }
        $returns=array();
        $data = (array)$ip->data;
        return $data;
    }

    /**
     * 检测用户当前浏览器
     * @param string $serverMess :客户端信息
     * @return bool:是否ie浏览器
     */
    public function isIE($serverMess = '')
    {

        $userbrowser = $serverMess;

        if (preg_match('/MSIE/i', $userbrowser)) {

            $usingie = true;

        } else if (preg_match('/Trident/i', $userbrowser)) {

            $usingie = true;

        } else {

            $usingie = false;

        }

        return $usingie;

    }

    /**
     * 获取操作平台
     * @param $userMess:用户信息
     * @return string
     */
    public function getOS($userMess)
    {
        $agent = strtolower($userMess);
        if (strpos($agent, 'windows nt')) {
            $platform = 'Windows';
        } elseif (strpos($agent, 'macintosh')) {
            $platform = 'mac';
        } elseif (strpos($agent, 'ipod')) {
            $platform = 'iPod';
        } elseif (strpos($agent, 'ipad')) {
            $platform = 'iPad';
        } elseif (strpos($agent, 'iphone')) {
            $platform = 'iPhone';
        } elseif (strpos($agent, 'android')) {
            $platform = 'Android';
        } elseif (strpos($agent, 'unix')) {
            $platform = 'Unix';
        } elseif (strpos($agent, 'linux')) {
            $platform = 'Linux';
        } else {
            $platform = '其他未知';
        }
        return $platform.'平台';
    }
}