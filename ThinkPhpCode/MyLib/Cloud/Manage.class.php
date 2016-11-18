<?php
/**
 * 云存储管理类
 * User: han_vs
 * Date: 2016/10/21
 * Time: 20:06
 */
    /*定义命名空间*/
   namespace MyLib\Cloud;
   /*引入SDK*/
   require 'php-sdk-7.0.8/autoload.php';
   /*引入Auth初始化类*/
   use Qiniu\Auth;
   /*引入上传类*/
   use Qiniu\Storage\UploadManager;
   use Qiniu\Storage\BucketManager;
   use Think\Exception;

   class Manage{

       // 声明签权对象
       private $auth;
       private $bucketMgr;
       public $accessKey;
       public $secretKey;
       public $errors;

       /**
        * 初始化
        * @param array $key:
        */
       public function initialize($key=[])
       {
           if($key['accessKey']&&$key['secretKey']){
               $this->accessKey=$key['accessKey'];
               $this->secretKey=$key['secretKey'];
           }
           if(!$this->accessKey||!$this->secretKey){
               $this->errors='缺少key';
               return;
           }
           // 初始化签权对象
           $this->auth= new Auth($this->accessKey, $this->secretKey);
           //初始化BucketManager
           $this->bucketMgr = new BucketManager($this->auth);

       }


       /**
        * @param $bucket:空间名
        * @param $filePath:本地文件路径
        * @param $key:上传后保存的文件名
        * @param $url:空间链接
        * @throws $err:上传失败
        * @return string|void
        * @throws \Exception
        */
       public function Upload($bucket,$filePath,$key,$url=''){
           if(!$this->auth){
               $this->errors='缺少key';
               return;
           }
           // 生成上传Token
           $token = $this->auth->uploadToken($bucket);
           // 初始化 UploadManager 对象并进行文件的上传
           $uploadMgr = new UploadManager();
           // 调用 UploadManager 的 putFile 方法进行文件的上传
           list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
           //$ret返回结果
           if ($err !=null) {
               $this->errors='上传失败:'.$err;
           } else {
               if($url){
                   $url=substr($url,strlen($url)-1)=='/'?$url:$url.'/';
                   return 'http://'.$url.$key;
               }
               //$s= urldecode($_GET['name']);//解析URL中文

           }
       }


       /**
        * 文件信息
        * @param string $bucket:空间名
        * @param $key:文件名
        */
       public function message($bucket='',$key=''){
           if(empty($bucket)||empty($key)||!$this->auth||!$this->bucketMgr){
               return;
           }
           //获取文件的状态信息
           list($ret, $err) = $this->bucketMgr->stat($bucket, $key);
           if (!is_null($err)) {
               $this->errors="获取失败:".$err;
               return;
           } else {
               return $ret;
           }
       }

       /**
        * 文件移动
        * @param $bucket:文件所在空间
        * @param $key:文件名
        * @param $newbucket:移动到的空间名，也可以在同一个空间=重命名
        * @param $newkey:移动后的文件名
        * @return bool:返回移动结果(true/false)
        */
       public function move($bucket='',$key='',$newbucket='',$newkey=''){
           if(empty($bucket)||empty($key)||empty($newbucket)||empty($newkey)){
               return false;
           }
           //将文件从文件$key移动到文件$key2。可以在不同bucket移动
           $err = $this->bucketMgr->move($bucket, $key, $newbucket, $newkey);
           if (!is_null($err)) {
               $this->errors="移动失败".$err;
               return false;
           } else {
               return true;
           }
       }

       /**
        * 复制文件
        * @param string $bucket:文件所在空间名
        * @param string $key:文件名
        * @param string $newbucket:复制到的空间名，可以是同一个空间
        * @param string $newkey:新的文件名
        * @return bool:返回复制结果
        */
       public function copy($bucket='',$key='',$newbucket='',$newkey=''){
           if(empty($bucket)||empty($key)||empty($newbucket)||empty($newkey)){
               return false;
           }
           //将文件从文件$key复制到文件$newkey。可以在不同bucket复制
           $err = $this->bucketMgr->copy($bucket, $key, $newbucket, $newkey);
           if (!is_null($err)) {
               $this->errors="复制失败：".$err;
               return false;
           } else {
               return true;
           }
       }

       /**
        * 删除文件
        * @param string $bucket:空间名
        * @param string $key:要删除的文件名
        * @return bool:返回处理结果
        */
       public function delete($bucket='',$key=''){
           //删除$bucket 中的文件 $key
           $err = $this->bucketMgr->delete($bucket, $key);
           if (!is_null($err)) {
               $this->errors='移除失败：'.$err;
               return false;
           } else {
               return true;
           }
       }

       /**
        * 列出空间文件
        * @param string $bucket:空间名
        * @param $prefix:文件前缀
        * @param $limit:列出数目
        * @return bool|void
        */
       public function listed($bucket='',$prefix='',$limit){
           if(empty($bucket)||!is_numeric($limit)){
               return;
           }
           $marker='';
           list($iterms, $marker, $err) = $this->bucketMgr->listFiles($bucket, $prefix, $marker, $limit);
           if (!is_null($err)) {
               $this->errors="列出文件失败：".$err;
               return false;
           } else{
               return $iterms;
           }
       }
       public function helps(){
           echo '初始化方法：initialize($key)，参数$key["accessKey","secretKey"],如果已传入accessKey和secretKey属性值则可忽略。<br>
           上传方法：Upload($bucket(空间名),$filePath(本地文件路径),$key(上传后保存的文件名),
           $url(空间链接不需要加http://,这个参数不是必须的，如果需要返回上传后的链接则传入该参数))。<br>return:返回结果。';
       }
   }

  