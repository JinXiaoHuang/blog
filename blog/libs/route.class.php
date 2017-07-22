<?php
//路由（控制器有多种，这里采用的是路由的方式），定义route类
class route{
    //定义在地址栏要输入的变量
    private static $d='';
    private static $f='';
    private static $a='';
    //定义方法getInfo()用来获取地址栏输入的内容，静态变量只能通过self::变量的形式进行访问
    function getInfo(){
        self::$d=(isset($_REQUEST['d'])&&!empty($_REQUEST['d']))?$_REQUEST['d']:'index';
        self::$f=(isset($_REQUEST['f'])&&!empty($_REQUEST['f']))?$_REQUEST['f']:'index';
        self::$a=(isset($_REQUEST['a'])&&!empty($_REQUEST['a']))?$_REQUEST['a']:'init';

    }
    //定义方法getPath()用来做对输入内容做逻辑判断，路由，对其进行分配
    function getPath(){
        $this->getInfo();
        $fulldir=MODULE_PATH.self::$d."";
        //echo $fulldir.'<br>';
        if(is_dir($fulldir)){
            $fullfile=$fulldir.'/'.self::$f.".class.php";
            if(is_file($fullfile)){
                include $fullfile;
                if(class_exists(self::$f)){
                    $obj=new self::$f;
                    if(method_exists($obj,self::$a)){
                        $method=self::$a;
                        $obj->$method();
                    }else{
                        echo self::$a.'方法不存在';
                    }
                }else{
                    echo self::$f.'类不存在';
                }
            }else{
                echo self::$f.'文件不存在';
            }
        }else{
            echo self::$d.'目录(文件夹)不存在';
        }
    }

}

