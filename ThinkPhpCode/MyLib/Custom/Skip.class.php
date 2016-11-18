<?php
/**
 * Created by PhpStorm.
 * User: hanvs
 * Date: 2016/10/22
 * Time: 12:06
 */
namespace MyLib\Custom;
class Skip{

    public function start($url){
        die('<script type="text/javascript">window.location.href="http://'.$_SERVER["SERVER_NAME"].'/index.php/'.$url.'";</script>');

    }
}