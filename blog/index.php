<?php
//单入口文件：
// 1.方便管理项目文件
// 2.代码公用
//    // 3.程序更安全
//在一个页面中如何载入多个页面的？
//路由=>控制器
//include只支持电脑上的文件路径
//ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-Type:text/html;charset=utf8");
//文件路径
define('MVC','yes');
//路径根目录
define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);
//echo ROOT_PATH.'</br>';
//项目运行的根目录
define('APP_PATH',substr($_SERVER['SCRIPT_FILENAME'],0,
        strrpos($_SERVER['SCRIPT_FILENAME'],'/')+1));
//echo APP_PATH.'</br>';
//核心目录
define('LIBS_PATH',APP_PATH.'libs/');
//echo LIBS_PATH.'</br>';
//模块目录
define("MODULE_PATH",APP_PATH."module/");
//echo MODULE_PATH.'<br>';
//模板目录
define("TEM_PATH",APP_PATH."template/");
//echo TEM_PATH.'<br>';
//服务器根目录
define("HTTP_PATH","http://".$_SERVER['SERVER_NAME'].substr($_SERVER['SCRIPT_NAME'],
        0,strrpos($_SERVER['SCRIPT_NAME'],'/')+1));
//echo HTTP_PATH.'<br>';
//当前项目的根目录
define("SELF_PATH","http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']);
//echo SELF_PATH.'<br>';
//static路径
define("STATIC_PATH",HTTP_PATH."static/");
define("HTTPLIBS_PATH",HTTP_PATH."libs/");
//echo STATIC_PATH.'<br>';
//css路径
define("CSS_PATH",STATIC_PATH."css/");
//echo CSS_PATH.'<br>';
//img路径
define("IMG_PATH",STATIC_PATH."img/");
//echo IMG_PATH.'<br>';
//js路径
define("JS_PATH",STATIC_PATH."js/");
//fonts的路径
define("FONTS_PATH",STATIC_PATH."fonts/");
//echo JS_PATH.'<br>';
//自己的路径
include LIBS_PATH.'route.class.php';

//echo  LIBS_PATH.'route.class.php'.'</br>';
include 'config.php';
//var_dump($arr);
include LIBS_PATH."db.class.php";
include LIBS_PATH."main.class.php";
include LIBS_PATH."indexMain.class.php";
include LIBS_PATH.'smarty/Smarty.class.php';
include LIBS_PATH.'code.class.php';
include LIBS_PATH.'session.class.php';
include LIBS_PATH.'tree.class.php';
//include LIBS_PATH.'upload.class.php';

$obj=new route();
$obj->getPath();
//在这个单入口文件里不能有任何的输出，不然就会出错
?>