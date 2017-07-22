<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 13:26
 */
//会执行给定的文件
//echo phpinfo();
$curl=curl_init();
curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_URL,"http://localhost/blog/img.php");
curl_exec($curl);