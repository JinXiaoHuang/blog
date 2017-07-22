<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 18:44
 */
class indexMain{
    function __construct(){
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");
        $smarty->setTemplateDir("template");
        $this->smarty=$smarty;
        $this->session=new session();

    }
    function jump($message,$url){
        echo "<script>alert('{$message}');location.href='{$url}';</script>";
    }
}