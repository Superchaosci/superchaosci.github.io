<?php
header("Content-Type:text/html;charset=utf-8");
require_once("httplib.php");


$header=array("");






    $url="https://api-takumi-record.mihoyo.com/game_record/app/genshin/api/index";
    $data="role_id=110075985&server=cn_gf01";
    $http = new httplib();
    $http->set_timeout(60);
    $http->set_header($header);
    $http->request($url,$data);
    echo $data=$http->get_data();

?>
