<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 11:23
 */
//验证码的作用，防止机器人暴力破解
header("content-type:image/png;");
$re=imagecreatetruecolor (150,50);
$blue=imagecolorallocate($re,0,0,255);
$red=imagecolorallocate($re,255,0,0);
imagefill($re,0,0,$blue);
imagettftext($re,30,0,10,30,$red,"ARCENA.ttf",'hh');
imagepng($re,'www.png');

