<?php
/**
 * Created by PhpStorm.
 * User: hanvs
 * Date: 2016/10/30
 * Time: 0:11
 */
namespace MyLib\Custom;
class City
{
    /**
     * 获取ip地区
     * @param string $ip :IP地址
     * @return string|null
     */
    public function getCity($ip = '')
    {
        if (empty($ip)) return '';
        //拼接请求参数
        $url = "http://ip.taobao.com/service/getIpInfo.php?ip=" . $ip;
        //获取结果转换json数据
        $ip = json_decode(file_get_contents($url));
        //判断结果
        if ((string)$ip->code == '1') {
            return '';
        }
        //获取数据并转为数组
        $data = (array)$ip->data;
        //声明省市县结果
        $site = '';

        //判断地区获取结果并拼接
        if ($data['region'] != $data['city']) {
            $site = $data['region'] . $data['city'];
        } elseif ($data['region'] == $data['city']) {
            $site = $data['city'];
        } elseif (!empty(trim($data['county']))) {
            $site = $data['region'] . $data['city'] . $data['county'];
        }
        //返回数据
        return $site;
    }
}